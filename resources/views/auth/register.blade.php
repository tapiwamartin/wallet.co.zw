@extends('layouts.auth')

@section('content')
    <section id="multiple-column-form " style="margin-top: 50px;">
        <img src="{{asset('images/logo.png')}}" style="height: 100px; display: block;
    margin: 0 auto;">
        <div class="row match-height">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Create Account</h4>
                        <p class="text-subtitle text-muted text-center">Please Fill in all the details to proceed.</p>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Name</label>
                                            <input type="text" id="first-name-column" class="form-control @error('name') is-invalid @enderror"
                                                   placeholder="First Name" name="name" value="{{old('name')}}" >
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Phone Number</label>
                                            <input type="text" id="last-name-column" class="form-control @error('phonenumber') is-invalid @enderror"
                                                   placeholder="Example: +263712345678" name="phonenumber" value="{{old('phonenumber')}}">

                                        @error('phonenumber')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">City</label>
                                            <input type="text" id="city-column" class="form-control @error('city') is-invalid @enderror" placeholder="City"
                                                   name="city" value="{{old('city')}}">

                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Region</label>
                                            <div class="form-group">
                                                <div class="col-md-12 mb-6 form-group">
                                                    <select class="choices form-select" name="regionId" id="regionId">
                                                        @forelse($regions as $region)
                                                            <option value="{{$region->id}}">{{$region->name}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>



                                        @error('regionId')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group ">
                                            <label for="company-column">Organisation (Church name)</label>
                                            <input type="text" id="company-column" class="form-control @error('organisation') is-invalid @enderror"
                                                  placeholder="Organisation" name="organisation" value="{{old('organisation')}}">

                                        @error('organisation')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Email</label>
                                            <input type="email" id="email-id-column" class="form-control  @error('email') is-invalid @enderror"
                                                   placeholder="Email" name="email" value="{{old('email')}}">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Password</label>
                                            <input type="password" id="email-id-column" class="form-control  @error('password') is-invalid @enderror"
                                                   placeholder="Password" name="password" value="{{old('password')}}">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Confirm Password</label>
                                            <input type="password" id="email-id-column" class="form-control"
                                                   placeholder="Confirm Password" name="password_confirmation">
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Register</button>

                                    </div>
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Already have an Account? Login') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
