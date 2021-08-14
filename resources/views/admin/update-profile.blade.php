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
                        <h3>Update Profile</h3>

                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form method="POST" action="{{ url('/admin/updateAdminProfile') }}" class="form form-vertical">
                            @csrf
                            <div class="form-body">
                                <input type="hidden" value="{{$user->id}}" name="id">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="first-name-icon">Name</label>
                                            <div class="position-relative">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Input with icon left" id="first-name-icon"
                                                    value="{{$user->name}}"
                                                    value="{{ old('name') }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>
                                                </div>
                                            </div>
                                            <span class="text-danger">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-icon">Email</label>
                                            <div class="position-relative">
                                                <input type="text" name="email" class="form-control" placeholder="Email"
                                                    id="email-id-icon"
                                                    value="{{$user->email}}"
                                                    value="{{ old('email') }}">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                            </div>
                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                        {{-- <div class="col-12 my-2">
                                            <div>
                                                <label for="">Profile Image</label>

                                            </div>
                                                    <!-- actual upload which is hidden -->
                                                    <input type="file" id="actual-btn" hidden />

                                                    <!-- our custom upload button -->
                                                    <label style="background-color: indigo !important;
                                                    color: white;
                                                    padding: 0.5rem;
                                                    font-family: sans-serif;
                                                    border-radius: 0.3rem;
                                                    cursor: pointer;
                                                    "  for="actual-btn">Choose File</label>
                                                    <!-- name of file chosen -->
                                                    <span style="margin-left: 0.3rem;
                                                    font-family: sans-serif;" id="file-chosen">No file chosen</span>
                                        </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="password-id-icon">Password</label>
                                            <div class="position-relative">
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Password" id="password-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-lock"></i>
                                                </div>
                                            </div>
                                            <span class="text-danger">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div> --}}

                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update Profile</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>const actualBtn = document.getElementById('actual-btn');

        const fileChosen = document.getElementById('file-chosen');

        actualBtn.addEventListener('change', function(){
          fileChosen.textContent = this.files[0].name
        });
        </script>
@stop
