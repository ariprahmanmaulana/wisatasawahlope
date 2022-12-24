@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="h2">Tambah Data Post</h2>
          </div>

          <div class="col-lg-8">
            <form action="/dashboard/posts" method="post" class="mb-5" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error ('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title')}}">
                @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                
                <input type="hidden" class="form-control  @error ('slug') is-invalid @enderror" id="slug" name="slug"   value="{{ old('slug')}}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                    <option value="{{ $category->id}}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id}}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control  @error ('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                    </div>

                    {{-- TRIX EDITOR --}}

                    <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                <p class="text-danger"> {{ $message }}</p>
                    
                @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body')}}">
                    <trix-editor input="body"></trix-editor>
                    
            </div>
            
            <button type="submit" class="btn btn-primary">Posting</button>
            </form>
          </div>

          
          {{-- slug otomatis (fetch API js) --}}
          <script>
              const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("change", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

        function previewImage() {
                const input = document.querySelector('#image');
                const image = document.querySelector('.img-preview');
                
                image.style.display = 'block';
                const oFReader = new FileReader();
                oFReader.readAsDataURL(input.files[0]);

                oFReader.onload = function(oFREvent) {
                    image.src = oFREvent.target.result;
                };
            }

              
          </script>
        
@endsection