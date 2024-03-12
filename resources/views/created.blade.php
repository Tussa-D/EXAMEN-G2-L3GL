@extends('layouts._base')
@section('content')

@section('titre','Liste des chauffeurs')


@include('layouts._navbar')


<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
            <body>

                <div class="container" style="margin-top: 50px;">
                    <div class="row">
        
        
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <h3 class="text-center text-danger"><b>Add New Post</b> </h3>
                            <div class="form-group">
                                <form action="/post" method="post" enctype="multipart/form-data">
                                 @csrf
                                 <input type="text" name="title" class="form-control m-2" placeholder="title">
                                 <input type="text" name="author" class="form-control m-2" placeholder="author">
                                 <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body"></Textarea>
                                 <label class="m-2">Cover Image</label>
                                 <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
        
                                 <label class="m-2">Images</label>
                                 <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>
        
                                <a href="/location" class="btn btn-info">Ajouter</a>
                               

                                </form>
                           </div>
                        </div>
                    </div>
                </div>    
        
        
            </body>
        </div>

          @include('layouts._navbar')

      <!-- end navbar -->

        </div>
      </div>
    </div>

  </section><!-- End Hero Section -->






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@include('layouts._sidebar')



</body>
@endsection 