@extends('layouts.DashAdmin_nav')

@section('title', ($isUpdate ? 'Update' : 'Create') . ' Information')
@php
    $route = route('infos.store');
    if ($isUpdate) {
        $route = route('infos.update', $info);
    }
@endphp


@section('content')
@include('layouts.errors-notif')

         <div class="container">
        <h1>@yield('title')</h1>
        <br>
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($isUpdate)
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name..."
                    value="{{ old('name', $info->name) }}">
            </div>
            <br>

                <div class="form-group">
                    <label for="job" class="form-label">Job</label>
                    <input type="text" class="form-control" id="job" placeholder="What is Your job" name="job"
                    value="{{ old('job', $info->job) }}">
            </div>
            <br>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" id="description" class="form-control" placeholder="type the description here">{{ old('description', $info->description) }}</textarea>
            </div>
            <br>


        {{-- <div class="mb-3">
            <input type="file" multiple name="images[]">
        </div> --}}

        <div class="form-group">
            <label for="formFile" class="form-label">File Upload 1</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="file-upload" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                    </label>
                    <input name="image" id="file-upload" type="file">
                </div>
            </div>

        @if ($info->image1)
            <img width="100px" src="/storage/{{ $info->image1 }}" alt="">
        @endif
        </div>
        <br>

        <div class="form-group">
            <label for="formFile" class="form-label">File Upload 2</label>
            <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                <div class="product-upload">
                    <label for="file-upload" class="file-upload mb-0">
                        <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                        <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                    </label>
                    <input name="image" id="file-upload" type="file">
                </div>
            </div>

        @if ($info->image2)
            <img width="100px" src="/storage/{{ $info->image2 }}" alt="">
        @endif
        </div>
        <br>

            <div class="form-group">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text"  name="facebook" id="facebook" class="form-control" placeholder="the facebook account"
                    value="{{ old('facebook', $info->facebook) }}">
            </div>

            <br>
            <div class="form-group">
                <label for="github" class="form-label">Github</label>
                <input type="text"  name="github" id="github" class="form-control" placeholder="the github account"
                    value="{{ old('github', $info->github) }}">
            </div>

            <br>
            <div class="form-group">
                <label for="linkedin" class="form-label">Linkedin</label>
                <input type="text"  name="linkedin" id="linkedin" class="form-control" placeholder="the linkedin account"
                    value="{{ old('linkedin', $info->linkedin) }}">
            </div>
            <br>

            <div class="form-group">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" name="instagram" id="instagram" class="form-control" placeholder="the instagram account"
                    value="{{ old('instagram', $info->instagram) }}">
            </div>
            <br>


            <div class="form-group">
                <label for="yearsExp" class="form-label">Years of Experience</label>
                <input type="number"  name="yearsExp" id="yearsExp" class="form-control" placeholder="the yearsExp account"
                    value="{{ old('yearsExp', $info->yearsExp) }}">
            </div>
            <br>


            <div class="form-group">
                <label for="email" class="form-label">email</label>
                <input type="email"  name="email" id="email" class="form-control" placeholder="the email account"
                    value="{{ old('email', $info->email) }}">
            </div>
            <br>


            <div class="form-group">
                <label for="phoneNumber" class="form-label">phone Number</label>
                <input type="number"  name="phoneNumber" id="phoneNumber" class="form-control" placeholder="the phone Number "
                    value="{{ old('phoneNumber', $info->phoneNumber) }}">
            </div>
            <br>


            <div class="form-group">
                <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
            </div>
            <br>
            <br>
            <br>

        </form>
@endsection
