@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{route('invoices.create')}}" class="btn btn-primary"> Create Invoice</a>
                    <div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Invoice Number</th>
                                <th>Invoice Date</th>
                                <th>Customer</th>
                                <th>Total Amount</th>
                            </tr>
                            @foreach ($invoices as $invoice)
                            <tr>
                                <td>{{ $invoice->invoice_number }}</td>
                                <td>{{ $invoice->invoice_date }}</td>
                                <td>{{ $invoice->customer->name }}</td>
                                <td>{{ $invoice->total_amount }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
