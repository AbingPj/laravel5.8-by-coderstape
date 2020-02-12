@extends('layout')

@section('content')

    <h1>Customers</h1>

    <form action="customers"  method="POST" class="pb-5">
        @csrf
            <p>Name</p>
            <div class="input-goroup pb-2">
                <input type="text" name="name" value="{{ old('name') }}">
                {{$errors->first('name')}}
            </div>
           

            <p>Email</p>
            <div class="input-goroup pb-2">
                <input type="text" name="email" value="{{ old('email') }}">
                {{$errors->first('email')}}
            </div>
            
       
        <button type="submit">Add Customer</button>
        
    </form>
     
    <ul>
        @foreach ($customers as $customer)
                 <li>{{$customer->name}} <span class="text-muted">[{{$customer->email}}]</span></li>
        @endforeach
    </ul>


@endsection
