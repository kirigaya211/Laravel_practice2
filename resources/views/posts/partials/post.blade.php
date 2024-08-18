


 <h1><a class="text-decoration-none" href="{{ route('post.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h1>

@if($post->comments_count)
    <p>{{$post->comments_count}} comments</p>
@else
   <p>No comments yet!</p> 
@endif

<div>
    <a href="{{route('post.edit', ['post'=>$post->id])}}" class="btn btn-primary">Edit</a>
    <form class="d-inline" action="{{route('post.destroy', ['post'=>$post->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value='Delete!' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>
</div>