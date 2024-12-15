
@extends('layouts.dashAdmin_nav')

@section('title' , ($isUpdate?'Update':'Create') . ' Design')

@php
    $route = route('Designs.store');
    if($isUpdate){
        $route =  route('Designs.update', $Design);
    }
@endphp

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18"> Design</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2"> Design</span>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <h3 class="fs-18  border-bottom pb-20 mb-20">Design</h3>
                    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($isUpdate)
                          @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Name</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="name" value="{{ old('name', $Design->name) }}" class="form-control text-dark ps-5 h-58"
                                            placeholder="name">
                                        <i
                                            class="ri-edit-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Client</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="Client" value="{{ old('Client', $Design->Client) }}" class="form-control text-dark h-58 ps-5"
                                            placeholder="Enter rate">
                                        <i
                                            class="ri-briefcase-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label class="label">Categories</label>
                                <div class="form-group position-relative mb-3">
                                    <select name="categorie__design_id" id="categorie__design_id"
                                        class="form-select form-control text-gray-light h-58 ps-5"
                                        aria-label="Default select example">
                                        @foreach ($Categorie_Designs as $Categorie)
                                            <option value="{{ $Categorie->id }}">{{ $Categorie->name }}</option>
                                        @endforeach
                                    </select>
                                    <i
                                        class="ri-calendar-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>



                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Attached Files</label>
                                    <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                        <div class="product-upload">
                                            <label for="file-upload-x" class="file-upload mb-0">
                                                <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                                                <span class="d-block fw-semibold text-body">Drop files here or click to
                                                    upload.</span>
                                            </label>
                                            <input name="photo" id="file-upload-x" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary py-3 px-5 fw-semibold text-white">Create
                                        Design</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script>
        $('#summernote').summernote({
            placeholder: 'Some demo text ...',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection
