@extends('layouts.app')

@section('title', 'GifBloom - Each scroll is a story')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-9 m-auto">
            <div class="mb-4 d-flex gap-0 align-items-center">
                <img src="{{ $post->user->avatar }}" width="45" height="45" class="br__8">
                <div class="w-100" style="margin-left: 15px;">
                    <a href={{ route('profile', $post->user->username) }} class="post__title mb-0">{{ $post->user->username }}</a>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="post__description">{{ $post->created_at->format('l jS F Y') }}</p>
                        <a href={{ route('profile', $post->user->username) }} class="post__description">View Profile</a>
                    </div>
                </div>
            </div>
            
            <livewire:post.post :post="$post" lazy.defer />

            <livewire:post.Commentlist lazy.defer :id="$post->id" />
        </div>
    </div>
</div>

@endsection
