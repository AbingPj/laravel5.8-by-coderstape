@extends('layout')

@section('title', 'Customer List')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Customer List</h1>
        </div>
    </div>

    <a href="customers/create">Add New Customer</a>

    <hr>
     
    <div class="row">
        <div class="col-6">
            <h3>Active Customers</h3>
            <ul>
                @foreach ($activeCustomers as $customer)
                         <li>{{$customer->name}} <span class="text-muted">[{{$customer->company->name}}]</span></li>
                @endforeach
            </ul>
        
        </div>

        <div class="col-6">
            <h3>Inactive Customers</h3>
            <ul>
                @foreach ($inactiveCustomers as $customer)
                         <li>{{$customer->name}} <span class="text-muted">[{{$customer->company->name}}]</span></li>
                @endforeach
            </ul>
        
        </div>
    </div>
    
    <hr>

    <div class="row">
        <div class="col-12">
        @foreach ($companies as $company)
                <h3>{{$company->name}}</h3>
                <ul>
                    @foreach ($company->customers as $customer)
                        <li>{{$customer->name}}</li>
                    @endforeach
                </ul>    
        @endforeach
        </div>
    </div>

@endsection
