
@extends('layouts.DashAdmin_nav')
@section('title', 'Educations')
@section('content')
    @include('sweetalert::alert')
    @include('layouts.errors-notif')

    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18"></h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/admin/dashboard" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Educations</span>
            </li>
        </ul>
    </div>
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-bold fs-18 mb-0 text-center">Educations</h4>
                <div class="d-sm-flex align-items-center gap-3 mt-3 mt-sm-0 justify-content-center">


            <a href="{{ route('Educations.create') }}"
                class="btn btn-primary text-white fw-semibold py-2 px-3 w-sm-100 mt-3 mt-sm-0">
                <span class="py-1 d-block">
                    <i class="ri-add-line"></i>
                    Create New
                </span>
            </a>
        </div>
    </div>

<div class="default-table-area recent-orders">
    <div class="table-responsive">
        <table class="table align-middle">
        <thead>
        <tr>
        <th scope="col" class="text-primary">
            <div class="form-check p-0 d-flex align-items-center">
                <span class="ms-4">School</span>
        </div>
        <th scope="col">speciality</th>
        <th scope="col">Start_Date</th>
        <th scope="col">End_Date</th>
        <th scope="col">description</th>
        <th scope="col">Actions</th>


    </tr>
    </thead>
    <tbody>
        @forelse ($Educations as $item )
        <tr>
            <td>{{ $item->name_school }}</td>
            <td>{{ $item->specialty }}</td>
            <td>{{ $item->Start_Date}}</td>
            <td>{{ $item->End_Date }}</td>
            <td>{{ $item->description }}</td>


        <td>
            <div class="dropdown action-opt">
                <button class="btn bg p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i data-feather="more-horizontal"></i>
                </button>


                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">

                <li>
                <a class="dropdown-item" href="{{ route('Educations.edit', $Educations) }}">
                <i data-feather="edit-3"></i>
                    Rename
                </a>
                </li>



                <li>
                <form class="dropdown-item"  action="{{ route('Educations.destroy', $Educations) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <i data-feather="trash-2"></i>
                    <input type="submit" value="Delete" style="background-color: transparent; border: none; color: inherit; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='rgba(0, 0, 0, 0.1)'" onmouseout="this.style.backgroundColor='transparent'" />

                </form>
                </li>

                </ul>
                </div>
            </tr>
        {{-- ila kant empty kteb message --}}
    @empty
        <tr>
            <td colspan="9" align="center">
                <h5>There is no Education here !! </h5>
            </td>
        </tr>
    @endforelse

    </td>

    </tr>
    </tbody>
    </table>
</div>


</div>
</div>
</div>

<div class="flex-grow-1"></div>
{{-- {{$Educations->links()}} --}}
@endsection



