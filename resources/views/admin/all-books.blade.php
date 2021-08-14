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
                        <h3>All Books List</h3>
                        <p class="text-subtitle text-muted">For user to check they list</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">New Books List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped" id="table2">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>ExhibitorId</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Price</th>
                                    <th>SelePrice</th>
                                    <th>Cover</th>
                                    <th>BookType</th>
                                    <th>Update</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->bookId }}</td>
                                        <td>{{ $book->exhibitorId }}</td>
                                        <td>{{ $book->bookTitle }}</td>
                                        <td>{{ $book->authorName }}</td>
                                        <td>{{ $book->price }}</td>
                                        <td>{{ $book->sellingPrice }}</td>
                                        <td>{{ $book->coverPhoto }}</td>
                                        <td>{{ $book->typeOfBook }}</td>
                                        <td><a href="#"><button class="btn btn-primary btn-block">Edit</button></a></td>




                                        <td><a href="{{ url('/admin/bookStatus') }}/{{ $book->bookId }}"><button
                                                    class="{{ $book->status == 0 ? 'btn btn-secondary btn-block' : 'btn btn-primary btn-block' }}">

                                                    {{ $book->status == 0 ? 'Rejected' : 'Accepted' }}
                                                </button></a></td>



                                        <td><a href="{{ url('/admin/deleteBook') }}/{{ $book->bookId }}"><button
                                                    class="btn btn-warning btn-block">Delete</button></a></td>
                                    </tr>
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
