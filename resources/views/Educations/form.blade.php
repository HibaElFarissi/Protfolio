
@extends('layouts.DashAdmin_nav')
@section('title', ($isUpdate ? 'Update' : 'Create') . ' Education')

@php
    $route = route('Educations.store');
    if ($isUpdate) {
        $route = route('Educations.update', $Education);
    }
    @endphp



@section('content')
@include('layouts.errors-notif')

    <div class="container my-5">
        <h1>@yield('title')</h1>
        <br>
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
        {{-- <form action="{{ route('Educations.store') }}" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            @if ($isUpdate)
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="name_school" class="form-label">School_Name</label>
                <input type="text" name="name_school" id="name_school" class="form-control"
                value="{{ old('name_school', $Educations->name_school) }}">
            </div>
            <br>



            <div class="form-group">
                <label for="specialty" class="form-label">Speciality</label>
                <input type="text" name="specialty" id="specialty" class="form-control"
                value="{{ old('specialty', $Educations->specialty) }}">
            </div>
            <br>


            <div class="form-group">
                <label for="Start_Date" class="form-label">Start_Date</label>
                <input type="date" name="Start_Date" id="Start_Date" class="form-control"
                value="{{ old('Start_Date', $Educations->Start_Date) }}">
            </div>
            <br><br>



            <div class="form-group">
                <label for="End_Date" class="form-label">End_Date</label>
                <input type="date" name="End_Date" id="End_Date" class="form-control"
                value="{{ old('End_Date', $Educations->End_Date) }}">
            </div>
            <br><br>


            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control">{{ old('description', $Educations->description) }}</textarea>
            </div>
            <br><br>



            <div class="form-group">
                <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
            </div>

        </form>
    </div>
@endsection

