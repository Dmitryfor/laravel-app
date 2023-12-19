@extends('layouts.main')

@section('page.title', 'Donates')
    
@section('main.content')

    <x-title>
        
        {{ __('Donates') }}
    
    </x-title>

    @include('user.donates.stats')
    
@endsection