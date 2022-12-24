@extends('layouts.main')

@section('container')
<h3 class="mb-3 ms-5">{{ $title }}</h3>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">
      @if (request('category'))
          <input type="hidden" name="category" value="{{request ('category')}}">
      @endif
      @if (request('author'))
          <input type="hidden" name="author" value="{{request ('author')}}">
      @endif
      <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search..." name="search">
  <button class="btn btn-outline-secondary" type="submit">Search</button>
</div>
    </form>
  </div>
</div>

@if ($posts->count() )

<div class="container ">
    <div class="row justify-content-center mb-3">
        <div class="col-lg-10">
            <div class="card">
                  <div class="card-body">
                    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
                    <p>
                        <small class="text-muted">
                            By.  <a href="/posts?author={{ $posts[0]->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}}</a>  in <a href="/posts?category={{$posts[0]->category->slug}}">{{$posts[0]->category->name}}</a> {{$posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>

                    <p class="card-text">{{$posts[0]->excerpt}}</p>

                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary"> Read More </a>
                </div>
                @if ($posts[0]->image)
                                <div style="max-height: 100%; overflow:hidden;">
                                    <img src="{{asset('storage/' .$posts[0]->image)}}" class="card-img-top" alt="{{$posts[0]->category->name}} " class="img-fluid">
                                </div>

                            @else
                                <img src="https://source.unsplash.com/800x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
                            @endif
            </div>
            
        </div>
    </div>


    


@foreach ($posts->skip(1) as $post)
    <div class="row justify-content-center mb-3">
        <div class="col-lg-10">
            <div class="card">
                  <div class="card-body">
                    <h3 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{$post->title}}</a></h3>
                    <p>
                        <small class="text-muted">
                            By.  <a href="/posts?author={{ $post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a>  in <a href="/posts?category={{$post->category->slug}}">{{$post->category->name}}</a> {{$post->created_at->diffForHumans() }}
                        </small>
                    </p>

                    <p class="card-text">{{$post->excerpt}}</p>

                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary"> Lihat </a>
                </div>
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' .$post->image)}}" alt="{{$post->category->name}} " class="img-fluid ">
                                    @else
                                        <img src="https://source.unsplash.com/800x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                                    @endif

            </div>
        </div>
    </div>
@endforeach
@else
        <p class="text-center fs-4">No post found.</p>
       </div> 
@endif

    {{-- pagination --}}
    <div class="d-flex justify-content-end">
        {{$posts->links()}}
    </div>
    

    @endsection