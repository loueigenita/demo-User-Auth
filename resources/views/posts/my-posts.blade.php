@extends('base')

@section('content')

<div class="float-end mt-2">
   <a href="{{'/posts/create'}}" class="btn btn-primary">
       Create New Posts
   </a>
</div>

<h1>My Posts</h1>
<hr>

<div class="d-flex justify-content-between">
  @foreach($myPosts as $post)

  <div class="card align-self-stretched" style="width: 31%">
       <div class="card-body">
            <div class="card-title">
                <h4>{{$post->title}}</h4>
                <p>
                    {{$post->content}}
                </p>
            </div>
            <div class="card-footer">
                <a href="{{url('/posts/edit/' . $post->id)}}" class="btn btn-info btn-sm"> Edit </a>
            </div>
       </div>
  </div>
  @endforeach
</div>



@endsection