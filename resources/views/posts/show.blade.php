@extends('layouts.app')

@section('title', $post->title)

@section('content')
    {{-- @if ($post['is_new'])
        <div>Using Blogpost using if</div>   
    @else
        <div>Using an old else if</div>
    @endif --}}
{{-- 
    @unless ($post['is_new'])
        <div>It is an old.. using unless</div>
    @endunless --}}

    <h1>{{$post->title}}</h1>
    <h1>{{$post->content}}</h1>
    <p>Added {{$post->created_at->diffForHumans()}}</p>
    @if(now()->diffInMinutes($post->created_at)<5)
    <div class="alert alert-info">New!</div>
    @endif
    <h4>Comments</h4>
    @forelse ( $post->comments as $comment )
        <p>
            {{ $comment->content }},
        </p>
        <p class="text-muted">
            added {{ $comment->created_at->diffForHumans() }}
        </p>
        
    @empty
        <p>No comments yet!</p>
    @endforelse

    {{-- <form class="d-inline" action="{{route('post.destroy', ['post'=>$post->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value='Delete!' class="btn btn-primary">
    </form> --}}
@endsection