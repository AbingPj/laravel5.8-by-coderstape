@extends('layout')

@section('title', 'Customer List')

@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Customer List</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="customers"  method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}"  class="form-control">
                    <div>{{$errors->first('name')}}</div>
                </div>
              
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}"  class="form-control">
                    <div>{{$errors->first('email')}}</div>
                </div>

                <div class="form-group">
                    <label for="email">Status</label>
                    <select name="active" id="active" class="form-control">
                        <option value="" disabled> Select Customer Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                 <button type="submit" class="btn btn-primary">Add Customer</button>
        </form>
        </div>
    </div>
    

    <hr>
     
    <div class="row">
        <div class="col-6">
            <h3>Active Customers</h3>
            <ul>
                @foreach ($activeCustomers as $customer)
                         <li>{{$customer->name}} <span class="text-muted">[{{$customer->email}}]</span></li>
                @endforeach
            </ul>
        
        </div>

        <div class="col-6">
            <h3>Inactive Customers</h3>
            <ul>
                @foreach ($inactiveCustomers as $customer)
                         <li>{{$customer->name}} <span class="text-muted">[{{$customer->email}}]</span></li>
                @endforeach
            </ul>
        
        </div>
    </div>

@endsection
