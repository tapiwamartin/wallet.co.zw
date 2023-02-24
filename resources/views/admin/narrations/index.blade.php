@extends('layouts.master')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-9 col-md-6 order-md-1 order-last">
                    <h3>Configure Departments</h3>
                    <p class="text-subtitle text-muted"></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">

                </div>
            </div>
        </div>
    </div>

    <section class="section col-md-9 col-lg-9 offset-md-1 offset-lg-1">
        <div class="card">
            <div class="card-header">
                 <a href="{{route('narration.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2 float-end"><i
                            class="fas fa-plus fa-sm text-white-50"></i>Add Narration</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th></th>


                        </tr>
                        </thead>

                        <tbody>
                        @forelse($narrations as $narration)
                            <tr>
                                <td>{{$narration->name}}</td>
                                <td>

                                    <form method="POST" action="{{route('narration.destroy',$narration)}}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('narration.edit',$narration)}}" style="text-decoration: none" class="btn"><i
                                                class="bi bi-pencil"></i></a>
                                        <button type="submit" class="btn"><i
                                                class="bi bi-trash "></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-md-center text-danger" colspan="2">No Narrations Found</td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@stop
