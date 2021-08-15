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
                        <h3>Update Profile Picture</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">

                        @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-block">

                            <button type="button" class="close" data-dismiss="alert">×</button>

                                <strong>{{ $message }}</strong>

                        </div>

                        <img src="images/{{ Session::get('image') }}">

                        @endif

                        @if (count($errors) > 0)

                            <div class="alert alert-danger">

                                <strong>Whoops!</strong> There were some problems with your input.

                                <ul>

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>
                        @endif

                        <form method="POST" action="{{ url('/admin/updateAdminPicture')}}" enctype="multipart/form-data" class="form form-vertical">
                            @csrf
                            <div class="form-body">
                                <input type="hidden" value="{{$user->id}}" name="id">
                                <div class="row">
                                    <div class="col-12 my-2">
                                        <div>
                                            <label for="">Upload new Profile Image</label>
                                        </div>
                                                <!-- actual upload which is hidden -->
                                                <input type="file" name="file" id="actual-btn" value="{{$user->profile_pic}}" hidden />

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
                                        {{-- <p class="text-danger">
                                            @error('file')
                                            {{$message}}
                                              @enderror
                                        </p> --}}
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update Picture</button>
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
