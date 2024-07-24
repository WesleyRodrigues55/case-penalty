@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div>
        <h1>{{ __('Welcome to the homepage!') }}</h1>
        

        <div class="row mt-4">

            <div class="col-md-6">
                <a href="{{ route('representatives.index') }}">
                    <div class="bg-dark rounded p-4 content-homepage">
                        <i class="bi bi-person-vcard-fill icons"></i>
                        <p>{{ __('Access Representative Information') }}</p>
                    </div>
                </a>
            </div>
            
            <div class="col-md-6">
                <a href="{{ route('customers.index') }}">
                    <div class="bg-dark rounded p-4 content-homepage">
                        <i class="bi bi-people-fill icons"></i>
                        <p>{{ __('Access Customer  Information') }}</p>
                    </div>
                </a>
            </div>

        </div>
    </div>
@endsection