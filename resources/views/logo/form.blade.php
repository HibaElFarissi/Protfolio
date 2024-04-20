
@extends('layouts.DashAdmin_nav')
@section('title' , ($isUpdate?'Update':'Create') . ' Logo')

@php
    $route = route('logo.store');
    if($isUpdate){
        $route =  route('logo.update', $logo);
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

        <br><br>

    <div class="form-group">
        <label for="formFile" class="form-label">File Upload</label>
        <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
            <div class="product-upload">
                <label for="file-upload" class="file-upload mb-0">
                    <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                    <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                </label>
                <input name="image" id="file-upload" type="file">
            </div>
        </div>
    @if ($logo->image)
        <img width="100px" src="/storage/{{ $logo->image }}" alt="">
    @endif
    </div>




        <br><br><br>
        <br><br><br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate? 'Edit': 'Create' }}">
            {{-- <input type="submit" class="btn btn-primary w-100" value="save"> --}}
        </div>
        <br>
        <br>
        <br>

    </form>
</div>
@endsection



