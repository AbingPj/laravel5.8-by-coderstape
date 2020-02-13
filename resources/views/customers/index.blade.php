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
     
    @foreach ($customers as $customer)
        <div class="row">
            <div class="col-2">
                    {{$customer->id}}
            </div>
            <div class="col-4">{{ $customer->name }}</div>
            <div class="col-4">{{ $customer->company->name }}</div>
            {{-- <div class="col-2">{{ $customer->active ? 'Active':'Inactive'}}</div> --}}
            <div class="col-2">{{ $customer->active}}</div>
          
        </div>
    @endforeach
   
    
    <hr>

@endsection
