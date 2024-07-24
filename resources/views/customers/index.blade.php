@extends('layouts.app')

@section('title', 'Customers')

@section('content')

    <div>
        <h1 class="mb-4">{{ __('Register Customer') }}</h1>

        @include('customers.register-customer')

        <hr>

        @include('customers.customer-list')
        
    </div>

    @include('customers.change-representative-modal')
    
@endsection
