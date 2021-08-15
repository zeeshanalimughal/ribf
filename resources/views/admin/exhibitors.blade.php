@extends('admin.layouts.master')

@section('content')

    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>All Exhibitors</h3>
                        <p class="text-subtitle text-muted">For user to check they list</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">New /exhibitors List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped text-center" id="table2">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Update</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $exhibitor)
                                    @if ($exhibitor->id == 1)
                                        @php
                                            continue;
                                        @endphp
                                    @else
                                        <tr>
                                            <td>{{ $exhibitor->id }}</td>
                                            <td>{{ $exhibitor->name }}</td>
                                            <td>{{ $exhibitor->email }}</td>
                                            {{-- <td><a href="{{ route('exhibitors.edit', ['id'=>$exhibitor->id]) }}"><button class="btn btn-success btn-block">Edit</button></a></td> --}}


                                            <td><a href="{{ url('/admin/edit') }}/{{ $exhibitor->id }}"><button
                                                        class="btn btn-success btn-block">Edit</button></a></td>


                                            <td><a href="{{ url('/admin/status') }}/{{ $exhibitor->id }}"><button
                                                        class="{{ $exhibitor->status == 1 ? 'btn btn-primary btn-block' : 'btn btn-secondary btn-block' }}">

                                                        {{ $exhibitor->status == 1 ? 'Activate' : 'Deactivate' }}
                                                    </button></a></td>


                                            <td><a href="{{ url('/admin/delete') }}/{{ $exhibitor->id }}"><button
                                                        class="btn btn-warning btn-block">Delete</button></a></td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                @include("admin.layouts.footer")
            </section>
        </div>

    </div>
    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table2 = document.querySelector('#table2');
        let dataTable = new simpleDatatables.DataTable(table2);
    </script>

@stop
