@extends('layout')
     
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h2>Edit Post</h2>
            </div>
            <div class="card-body">
                <form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $posts->title }}">
                    <input type="text" name="author" class="form-control m-2" placeholder="author" value="{{ $posts->author }}">
                    <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body">{{ $posts->body }}</Textarea>
                     
                    <label class="m-2">Cover Image</label>
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
 
                    <label class="m-2">Images</label>
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
 
                    <button type="submit" class="btn btn-success mt-3 ">Submit</button>
                </form>
                 
                    <label class="m-2">Cover Image</label>
                    <form action="/deletecover/{{ $posts->id }}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                    </form>
                    <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    <br>
                     
                    <label class="m-2">Images</label>
                    @if (count($posts->images)>0)
                    @foreach ($posts->images as $img)
                    <form action="/deleteimage/{{ $img->id }}" method="post">
                         <button class="btn text-danger">X</button>
                         @csrf
                         @method('delete')
                    </form>
                    <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    @endforeach
                    @endif
                     
            </div>                  
        </div>
    </div>                        
</div>
@endsection