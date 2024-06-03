
@extends('layouts.DashAdmin_nav')
@section('title', ($isUpdate ? 'Update' : 'Create') . ' Banner')

@php
    $route = route('banners.store');
    if ($isUpdate) {
        $route = route('banners.update', $banner);
    }
    @endphp


@section('content')
@include('layouts.errors-notif')

    <div class="container my-5">
        <h1>@yield('title')</h1>
        <br>
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($isUpdate)
                @method('PUT')
            @endif


            <br>
            <div class="form-group">
                <label for="formFile" class="form-label">Banner_About:</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="bannerAbout" id="file-upload" type="file" value="{{ old('bannerAbout', $banner->bannerAbout) }}">
                    </div>
                </div>

                {{-- Afficher old bannerAbout :  --}}
            @if ($banner->bannerAbout)
                 <img width="100px" src="/storage/{{ $banner->bannerAbout }}" alt="">
            @endif
            </div>
            <br>


            <div class="form-group">
                <label for="formFile" class="form-label">Banner_Client:</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="bannerClient" id="file-upload" type="file" value="{{ old('bannerClient', $banner->bannerClient) }}">
                    </div>
                </div>

                {{-- Afficher old bannerClient :  --}}
            @if ($banner->bannerClient)
                 <img width="100px" src="/storage/{{ $banner->bannerClient }}" alt="">
            @endif
            </div>
            <br>



            <div class="form-group">
                <label for="formFile" class="form-label">Banner_Testimonials:</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="bannerTestimonials" id="file-upload" type="file" value="{{ old('bannerTestimonials', $banner->bannerTestimonials) }}">
                    </div>
                </div>

                {{-- Afficher old bannerTestimonials :  --}}
            @if ($banner->bannerTestimonials)
                 <img width="100px" src="/storage/{{ $banner->bannerTestimonials }}" alt="">
            @endif
            </div>
            <br>


            <div class="form-group">
                <label for="formFile" class="form-label">Banner_Service:</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="bannerService" id="file-upload" type="file" value="{{ old('bannerService', $banner->bannerService) }}">
                    </div>
                </div>

                {{-- Afficher old bannerService :  --}}
            @if ($banner->bannerService)
                 <img width="100px" src="/storage/{{ $banner->bannerService }}" alt="">
            @endif
            </div>
            <br>


            <div class="form-group">
                <label for="formFile" class="form-label">Banner_Service_Detail:</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="bannerServiceDetail" id="file-upload" type="file" value="{{ old('bannerServiceDetail', $banner->bannerServiceDetail) }}">
                    </div>
                </div>

                {{-- Afficher old bannerServiceDetail :  --}}
            @if ($banner->bannerServiceDetail)
                 <img width="100px" src="/storage/{{ $banner->bannerServiceDetail }}" alt="">
            @endif
            </div>
            <br>




            <div class="form-group">
                <label for="formFile" class="form-label">Banner_Project:</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="bannerProject" id="file-upload" type="file" value="{{ old('bannerProject', $banner->bannerProject) }}">
                    </div>
                </div>

                {{-- Afficher old bannerProject :  --}}
            @if ($banner->bannerProject)
                 <img width="100px" src="/storage/{{ $banner->bannerProject }}" alt="">
            @endif
            </div>
            <br>



            <div class="form-group">
                <label for="formFile" class="form-label">Banner_Blog:</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="bannerBlog" id="file-upload" type="file" value="{{ old('bannerBlog', $banner->bannerBlog) }}">
                    </div>
                </div>

                {{-- Afficher old bannerBlog :  --}}
            @if ($banner->bannerBlog)
                 <img width="100px" src="/storage/{{ $banner->bannerBlog }}" alt="">
            @endif
            </div>
            <br>


            <div class="form-group">
                <label for="formFile" class="form-label">Banner_Blog_Detail:</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="bannerBlogDetail" id="file-upload" type="file" value="{{ old('bannerBlogDetail', $banner->bannerBlogDetail) }}">
                    </div>
                </div>

                {{-- Afficher old bannerBlogDetail :  --}}
            @if ($banner->bannerBlogDetail)
                 <img width="100px" src="/storage/{{ $banner->bannerBlogDetail }}" alt="">
            @endif
            </div>
            <br>



            <div class="form-group">
                <label for="formFile" class="form-label">Banner_Contact:</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to upload.</span>
                        </label>
                        <input name="bannerContact" id="file-upload" type="file" value="{{ old('bannerContact', $banner->bannerContact) }}">
                    </div>
                </div>

                {{-- Afficher old bannerContact :  --}}
            @if ($banner->bannerContact)
                 <img width="100px" src="/storage/{{ $banner->bannerContact }}" alt="">
            @endif
            </div>
            <br>
            <br>
            <br>




            <div class="form-group">
                <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
            </div>

        </form>
    </div>
@endsection
