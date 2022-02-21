
@extends('dashboard.layouts.app')
@section('content')

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        {{ __('You are logged in!') }} - 
        
        <span class="text-purple-600 ">{{ Auth::user()->name }}</span>

@endsection