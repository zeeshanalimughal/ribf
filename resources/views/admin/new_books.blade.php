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
                            <h3>New Books</h3>
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
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Nationality</th>
                                        <th>Price</th>
                                        <th>SelePrice</th>
                                        <th>Copys</th>
                                        <th>IssueDate</th>
                                        <th>Cover</th>
                                        <th>Publisher</th>
                                        <th>BookType</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Hello</td>
                                        <td>USA</td>
                                        <td>English</td>
                                        <td>120*160</td>
                                        <td>200</td>
                                        <td>250</td>
                                        <td>500</td>
                                        <td>COVER.JPG</td>
                                        <td>Publisher</td>
                                        <td>Islamic</td>
                                        <td><a href="#"><button class="btn btn-success">Accept</button></a></td>
                                        <td><a href="#"><button class="btn btn-warning">Cancel</button></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @include("admin.layouts.footer")
                </section>
            </div>


        </div>

        <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

@stop
