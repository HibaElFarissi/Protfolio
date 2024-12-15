@extends('layouts.DashAdmin_nav')

@section('title' , ($isUpdate?'Update':'Create') . ' Article')

@php
    $route = route('Articles.store');
    if($isUpdate){
        $route =  route('Articles.update', $Article);
    }
@endphp

@section('content')
@include('layouts.errors-notif')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>



<h1 style="font-weight: bold"> Create Article </h1>
<br>

<br>
    <form class="row g-3 needs-validation" action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        @if ($isUpdate)
          @method('PUT')
        @endif

        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">Title_Global</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('Title_Global') is-invalid @enderror" name="Title_Global"
                    id="validationCustom10" value="{{ old('Title_Global', $Article->Title_Global) }}" required>

            </div>
            @error('Title_Global')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Slug</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('slug') is-invalid @enderror" name="slug"
                    id="validationCustom10" value="{{ old('slug', $Article->slug) }}" required>

            </div>
            @error('slug')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div> --}}

        {{-- <div id="summernote"></div> --}}
        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">text 1:</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="text1" class="form-control py-3 @error('text1') is-invalid @enderror"
                id="summernote1" placeholder="Notes" required>{{ old('text1', $Article->text1) }}</textarea>

            </div>
            @error('text1')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>


        <br><br>
        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">text 2:</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="text2" class="form-control py-3 @error('text2') is-invalid @enderror"
                id="summernote2" placeholder="Notes" required>{{ old('text2', $Article->text2) }}</textarea>

            </div>
            @error('text2')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>


        {{-- <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">Quote :</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="quote" class="form-control py-3 @error('quote') is-invalid @enderror"
                id="summernote3" placeholder="Notes" required>{{ old('quote', $Article->quote) }}</textarea>

            </div>
            @error('quote')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div> --}}

{{-- 
        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">text 3:</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="text3" class="form-control py-3 @error('text3') is-invalid @enderror"
                id="summernote4" placeholder="Notes" required>{{ old('text3', $Article->text3) }}</textarea>

            </div>
            @error('text3')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div> --}}


        <br><br>

        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">File Upload photo 1</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload1" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <p class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</p>
                        </label>
                        <input id="file-upload1" class="@error('image1') is-invalid @enderror" type="file" name="image1">

                    </div>
                    @error('image1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">File Upload photo 2</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload2" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <p class="d-block fw-semibold text-body" style="color:purple;">Drop files here or click to
                                upload.</p>
                        </label>
                        <input id="file-upload2" class="@error('image2') is-invalid @enderror" type="file" name="image2">

                    </div>
                    @error('image2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">File Upload photo 3</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload3" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <p class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</p>
                        </label>
                        <input id="file-upload3" class="@error('image3') is-invalid @enderror" type="file" name="image3">

                    </div>
                    @error('image3')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group mb-4">
                <label class="label">Categories</label>
                <div class="form-group position-relative">
                    <select name="ArticleCategorie_id" id="ArticleCategorie_id" class="form-select form-control h-58" aria-label="Default select example">
                             @foreach ($Categories as $Categorie)
                             <option  value="{{$Categorie->id}}">{{ $Categorie->name}}</option>
                             @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
        </div>
    </form>
    <br>
    <br>
    <script>
        $('#summernote1').summernote({
          placeholder: 'Enter here You Article',
          tabsize: 2,
          height: 100
        });
        $('#summernote2').summernote({
          placeholder: 'Enter here You Article',
          tabsize: 2,
          height: 100
        });
      </script>
@endsection
