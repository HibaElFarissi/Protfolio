
@extends('layouts.DashAdmin_nav')
@section('title', ($isUpdate ? 'Update' : 'Create') . ' Experience')

@php
    $route = route('Experiences.store');
    if ($isUpdate) {
        $route = route('Experiences.update', $Experience);
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
                <label for="name_company" class="form-label">Company_Name</label>
                <input type="text" name="name_company" id="name_company" class="form-control"
                value="{{ old('name_company', $Experiences->name_company) }}">
            </div>
            <br>



            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control"
                value="{{ old('subject', $Experiences->subject) }}">
            </div>
            <br>


            <div class="form-group">
                <label for="Start_Date" class="form-label">Start_Date</label>
                <input type="date" name="Start_Date" id="Start_Date" class="form-control"
                value="{{ old('Start_Date', $Experiences->Start_Date) }}">
            </div>
            <br><br>



            <div class="form-group">
                <label for="End_Date" class="form-label">End_Date</label>
                <input type="date" name="End_Date" id="End_Date" class="form-control"
                value="{{ old('End_Date', $Experiences->End_Date) }}">
            </div>
            <br><br>


            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control">{{ old('description', $Experiences->description) }}</textarea>
            </div>
            <br><br>



            <div class="form-group">
                <input type="submit" class="btn btn-primary w-100" value="{{ $isUpdate ? 'Edit' : 'Create' }}">
            </div>

        </form>
    </div>
@endsection

