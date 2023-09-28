@extends('layouts.main')

@section('page.title', $post['title'])
    
@section('main.content')

    <x-title>
        
        {{ $post['title'] }}

        <x-slot name="back_link"><a href="{{ route('posts') }}">{{ __('Back to posts') }}</a></x-slot>
    
    </x-title>

    {!! $post['content'] !!}
    
@endsection