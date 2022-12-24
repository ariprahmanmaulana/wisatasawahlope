@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <h1 class="mb-3"> {{ $post->title }} </h1>

            <p>By. <a href="/posts?author={{ $post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in  <a href="/posts?category={{$post->category->slug}}"  class="text-decoration-none">{{$post->category->name}}</a></p>

            @if ($post->image)
                <div style="max-height: 420px; overflow:hidden;" >
                    <img src="{{ asset('storage/' .$post->image)}}" alt="{{$post->category->name}} " class="img-fluid">
                </div>

            @else
                <img src="https://source.unsplash.com/1000x500?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}} " class="img-fluid">
            @endif
                {!! $post->body !!} 


            <a href="/posts" class="d-block btn btn-primary">Back</a>

            </div>
        </div>




</div>
@endsection