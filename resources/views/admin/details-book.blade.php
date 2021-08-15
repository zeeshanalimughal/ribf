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
                        <h3>Book Details</h3>

                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Book Details</li>
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
<div class="row">
<div class="col-4">

<div class="field">
   <b><p class="title bold">Title</p></b>
    {{$book->bookTitle}}
</div>
<div class="field">
   <b><p class="title bold">Author Name</p></b>
    {{$book->authorName}}
</div>
<div class="field">
   <b><p class="title bold">Author Nationality</p></b>
    {{$book->authorNationality}}
</div>
<div class="field">
   <b><p class="title bold">Book Language</p></b>
    {{$book->bookLanguage}}
</div>
<div class="field">
   <b><p class="title bold">Book Dimention</p></b>
    {{$book->bookDimention}}
</div>

<div class="field">
    <b><p class="title bold">Type of Book</p></b>
     {{$book->typeOfBook}}
 </div>
</div>



<div class="col-4">

    <div class="field">
        <b><p class="title bold">Selling Price</p></b>
         {{$book->sellingPrice}}
     </div>
     <div class="field">
        <b><p class="title bold">No of Copies</p></b>
         {{$book->noOfCopies}}
     </div>
     <div class="field">
        <b><p class="title bold">Issue Date</p></b>
         {{$book->issueDate}}
     </div>
     <div class="field">
        <b><p class="title bold">Pulisher Name</p></b>
         {{$book->publisherName}}
     </div>
     <div class="field">
        <b><p class="title bold">Price</p></b>
         {{$book->price}}
     </div>


</div>
<div class="col-4">
    <div class="field">
        <b><p>Cover Photo</p></b>
        <img class="" style="width: 260px;height:300px; "  src="{{ asset('/uploads')}}/{{$book->coverPhoto}}" alt="">
    </div>
</div>
</div>
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
