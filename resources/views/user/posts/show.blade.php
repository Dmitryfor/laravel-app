@extends('layouts.main')

@section('page.title', 'Show post')
    
@section('main.content')

    <x-title>
        
        {{ __('Show post') }}

        <x-slot name="back_link">

            <a href="{{ route('user.posts') }}">

                {{ __('Back to Posts') }}

            </a>

        </x-slot>

        <x-slot name="right">

            <x-button-link href="{{ route('user.posts.edit', $post['id']) }}" size="sm">

                {{ __('Edit Post') }}

            </x-button-link>

        </x-slot>
    
    </x-title>

    <div class="mb-3">

        <h2 class="h4">

            {{ $post['title'] }}

        </h2>

        <div class="small text-muted">{{ now()->format('d.m.Y') }}</div>

        <div class="pt-3">{!! $post['content'] !!}</div>

    </div>
    
@endsection