@extends('layouts.master')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-9 col-md-6 order-md-1 order-last">
                    <h3>Statement</h3>
                    <p class="text-subtitle text-muted"></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">

                </div>
            </div>
        </div>
    </div>

    <section class="section col-md-12 col-lg-12 offset-md-1 offset-lg-0">
        <div class="card">
            <div class="card-body text-sm">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                      <h5>Balance is ${{getBalance()}}</h5>
                        <tr>
                            <th>Transaction Date</th>
                            <th>Region</th>
                            <th>Organisation</th>
                            <th>Narration</th>
                            <th>User</th>
                            <th>Debit</th>
                            <th>Credit</th>
                            <th>Balance</th>



                        </tr>
                        </thead>

                        <tbody>
                        @forelse($deposits as $deposit)
                            <tr>
                                <td>{{$deposit->transactionDate}}</td>
                                <td>{{$deposit->region->name}}</td>
                                <td>{{$deposit->user->organisation}}</td>
                                <td>{{$deposit->narration->name}}</td>
                                <td>{{$deposit->user->name}}</td>
                                <td>{{$deposit->debitAmount }}</td>
                                <td>{{$deposit->creditAmount }}</td>
                                <td>{{$deposit->creditAmount - $deposit->debitAmount }}</td>

                            </tr>
                        @empty
                            <tr>
                                <td class="text-md-center text-danger" colspan="2">No Statement Available</td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@stop
