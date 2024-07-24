@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
    <div>
        <h1 class="mb-4">{{ __('Register Representative') }}</h1>

        @include('representatives.register-representative')

        <hr>

        @include('representatives.representative-list')
    </div>

    @include('representatives.delete-representative')

@endsection
