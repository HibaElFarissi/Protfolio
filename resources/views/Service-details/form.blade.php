@extends('layouts.DashAdmin_nav')

@section('title', ($isUpdate ? 'Update' : 'Create') . ' Service')
@php
    $route = route('Service-details.store');
    if ($isUpdate) {
        $route = route('Service-details.update', $Service_details);
    }
@endphp


@section('content')
@include('layouts.errors-notif')
    <form class="row g-3 needs-validation" action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($isUpdate)
                @method('PUT')
        @endif

        <div class="col-md-12">
            <label for="validationCustom10" class="form-label label">Title</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('title') is-invalid @enderror" name="title"
                    id="validationCustom10" value="{{ old('title', $Service_details->title) }}" required>

            </div>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label"> LongText :</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="longText" class="form-control py-3 @error('longText') is-invalid @enderror"
                    id="longText" placeholder="Notes" required>{{ old('longText', $Service_details->longText) }}</textarea>

            </div>
            @error('longText')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>



        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label"> Description :</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="description" class="form-control py-3 @error('description') is-invalid @enderror"
                    id="description" placeholder="Notes" required>{{ old('description', $Service_details->description) }}</textarea>

            </div>
            @error('description')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>






        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">File Upload photo</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="file-upload" class="@error('image') is-invalid @enderror" type="file" name="image">

                    </div>
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-lg-12">
           <p class="form-label label" >-- Affichage --</p>
        </div>
        <div class="col-lg-12">
            <label for="icon" class="form-label label">icon</label>
            <div class="position-relative">
                <input type="text" name="icon" class="form-control h-58 @error('icon') is-invalid @enderror"
                    id="icon" value="{{ old('icon', $Service_details->icon) }}" required>

            </div>
            @error('icon')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-12">
            <label for="title_Global" class="form-label label">Title Golobal</label>
            <div class="position-relative">
                <input type="text" name="title_Global" class="form-control h-58 @error('title_Global') is-invalid @enderror"
                    id="title_Global" value="{{ old('title_Global', $Service_details->title_Global) }}" required>

            </div>
            @error('title_Global')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-12">
            <label for="slug" class="form-label label">Slug</label>
            <div class="position-relative">
                <input type="text" name="slug" class="form-control h-58 @error('slug') is-invalid @enderror"
                    id="slug" value="{{ old('slug', $Service_details->slug) }}" required>

            </div>
            @error('slug')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
        </div>
    </form>
    <br>
    <br>
    <script>

        $('#description').summernote({
            placeholder: 'Description...',
            tabsize: 2,
            height: 100
        });

    </script>
@endsection
