@extends('layouts.DashAdmin_nav')
@section('title', 'Logo')
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
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Logo</span>
            </li>
        </ul>
    </div>
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-bold fs-18 mb-0 text-center">Logo</h4>
                <div class="d-sm-flex align-items-center gap-3 mt-3 mt-sm-0 justify-content-center">


            <a href="{{ route('logo.create') }}"
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
                <span class="ms-4">Logo</span>
        </div>


        <th scope="col">Actions</th>

    </tr>
    </thead>
    <tbody>
        @forelse  ($logo as $item )
        <tr>
            <td>
                <div class="form-check p-0 d-flex align-items-center">
                    <a href="#" class="d-flex align-items-center ms-4">
                        <img src="storage/{{ $item->image }}" class="wh-44 rounded"  alt="logo_image">
                    </a>
                </div>
            </td>

        <td>
            <div class="dropdown action-opt">
                <button class="btn bg p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i data-feather="more-horizontal"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">

                {{-- Rename:  --}}
                    <li>
                    <a class="dropdown-item" href="{{ route('logo.edit', $item) }}">
                    <i data-feather="edit-3"></i>
                        Rename
                    </a>
                    </li>

                <li>
                <form class="dropdown-item"  action="{{ route('logo.destroy', $item) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <i data-feather="trash-2"></i>
                    <input type="submit"  value="Delete" />
                    <input type="submit" value="Delete" style="background-color: transparent; border: none; color: inherit; cursor: pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='rgba(0, 0, 0, 0.1)'" onmouseout="this.style.backgroundColor='transparent'" />
                </form>
                </li>

                </ul>
                </div>
            </tr>
    @endforeach

    </td>

    </tr>
    </tbody>
    </table>
</div>



</div>
</div>
</div>
@endsection


