<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
<title>RIBF</title>
<meta name="description" content="RIBF">
<meta name="keywords" content="bootstrap,responsive,template,developer">
<meta name="author" content="Perpetual">

<!-- Favicon -->
<link type="image/x-icon" href="https://craziecoders.com/ribf/public/uploads/favicon/xEbLUPnNmHk6zx9B8yrSbmfn3xDktaxJ0Q806RcN.png" rel="shortcut icon">

<!-- Fonts -->
<link href="/css" rel="stylesheet" media="all">

<!-- Bootstrap -->
<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all">

<!-- Icons -->
<!--
<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="all">
<link rel="stylesheet" href="/css/line-awesome.min.css" type="text/css" media="all">
<link type="text/css" href="/css/bootstrap-tagsinput.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/jodit.min.css" rel="stylesheet" media="all" >
<link type="text/css" href="/css/sweetalert2.min.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/slick.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/xzoom.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/jssocials.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/jssocials-theme-flat.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/intlTelInput.min.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/spectrum.css" rel="stylesheet" media="all">
-->

<!-- Global style (main) -->
<link type="text/css" href="/css/active-shop.css" rel="stylesheet" media="all">


<link type="text/css" href="/css/main.css" rel="stylesheet" media="all">


<!-- color theme -->
<link href="/css/7.css" rel="stylesheet" media="all">

<!-- Custom style -->
<link type="text/css" href="/css/custom-style.css" rel="stylesheet" media="all">

<link rel="stylesheet" href="/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="/jquery-ui/jquery-ui.theme.min.css">

<style>
@import url('https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap');


body,.heading,h1,h2,h3,h4,h5,h6,button{
    font-family: 'Changa', sans-serif !important;
    font-weight: normal;
    font-style: normal;
}

body{direction: rtl}
input.custom-file-input{text-align: left !important;}
button,.heading.heading-4{text-align: center !important}
.terms{text-align: right !important}
</style>

<!-- jQuery -->
<script src="/js/jquery.min.js"></script>
<script src="/jquery-ui/jquery-ui.min.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</head>
<body>


<!-- MAIN WRAPPER -->
<div class="body-wrap shop-default shop-cards shop-tech gry-bg">

    <!-- Header -->


        <section class="auth-profile">
        <div class="profile-inner">
                <div class="row">
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto">
                        <div class="form-wrapper">
                            <div class="main-top">


                                    <!-- <a href="#" class="btn-action">Signup</a> -->

                                <a href="#"> <img src="/images/logo.svg" style="width:300px;" class="text-right"></a>
                            </div>
                            <div class="text-center mb-4">
                                <h3 class="heading heading-4 strong-500">تسجيل المشاركين</h3>

                            </div>

                            <div class="mb-4">
                                    <form class="form-default" role="form" action="#" method="POST">


                                        <div class="form-group performer">
                                            <div class="input-group input-group--style-1">
                                                <input type="text" class="form-control" value="" placeholder="عنوان الكتاب" name="bookTitle" id="bookTitle">
                                            </div>
                                        </div>

                                        <div class="form-group performer" id="last_name_div">
                                            <div class="input-group input-group--style-1">
                                                <input type="text" class="form-control" value="" placeholder="اسم الكاتب" name="authorName" id="authorName">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <select class="form-select form-control">
                                              <option value="">جنسية الكاتب</option>
                                              <option value="1">خيار 1</option>
                                              <option value="2">Option 2</option>
                                              <option value="3">Option 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group ">
                                            <select class="form-select form-control">
                                              <option value="">لغة الكتاب</option>
                                              <option value="1">Option 1</option>
                                              <option value="2">Option 2</option>
                                              <option value="3">Option 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group--style-1">
                                                <input type="text" class="form-control" value="" placeholder="حجم الكتاب" name="bookDimension" id="bookDimension">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group--style-1">
                                                <input type="text" class="form-control" value="" placeholder="السعر بالريال السعودي" name="price" id="price">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group--style-1">
                                                <input type="text" class="form-control" value="" placeholder="سعر البيع في المعرض بالريال السعودي" name="sellingPrice" id="sellingPrice">
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <div class="input-group input-group--style-1">
                                                <input type="text" class="form-control" value="" placeholder="عدد الطبعات المشاركة في المعرض" name="numberCopies" id="numberCopies">
                                            </div>
                                        </div>

                                        <div class="form-group" id="issue_date">
                                            <div class="input-group input-group--style-1">
                                                <input type="text" class="form-control" value="" placeholder="تاريخ النشر" name="issueDate" id="datepicker">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="customFile">
                                              <label class="custom-file-label" for="customFile">صورة الغلاف</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-file">
                                              <input type="file" class="custom-file-input" id="customFile">
                                              <label class="custom-file-label" for="customFile">نسخة من الكتاب</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group--style-1">
                                                <input type="text" class="form-control" value="" placeholder="اسم الناشر" name="publisherName" id="publisherName">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <select class="form-select form-control">
                                              <option value="">نوع الكتاب</option>
                                              <option value="1">Option 1</option>
                                              <option value="2">Option 2</option>
                                              <option value="3">Option 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group ">
                                            <button class="btn btn-styled btn-base-1 w-100 btn-md">أضف كتاب</button>
                                        </div>

                                        <div class="mb-3 terms">
                                            أوافق على <a href="#">الشروط والأحكام</a>
                                        </div>


                                        <div class="row">

                                            <div class="col-6">
                                                 <button type="submit" class="btn btn-styled btn-base-1 w-100 btn-md">إرسال</button>
                                            </div>
                                            <div class="col-6">
                                                 <button type="submit" class="btn btn-styled btn-base-1 w-100 btn-md">إلغاء</button>
                                            </div>

                                        </div>

                                    </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
    </section>

    <!-- FOOTER -->
<footer id="footer" class="footer" style="display:none !important;">


    <div class="footer-bottom py-3 sct-color-3">
        <div class="container">
            <div class="row row-cols-xs-spaced flex flex-items-xs-middle">
                <div class="col-md-4">
                    <div class="copyright text-center text-md-left">

                    </div>

                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>
</footer>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>

            <div class="modal-body">
                <p>Are you sure? (Note: All information relevant to this will be deleted too.)</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="delete_link" class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>


    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader">
                    <i class="fa fa-spin fa-spinner"></i>
                </div>
                <button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>

</div><!-- END: body-wrap -->

<!-- SCRIPTS -->
<!-- <a href="#" class="back-to-top btn-back-to-top"></a> -->

<!-- Core -->
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/jquery-ui/jquery-ui.min.js"></script>

<!-- Plugins: Sorted A-Z -->
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/select2.min.js"></script>
<script src="/js/nouislider.min.js"></script>
<script src="/js/sweetalert2.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/jssocials.min.js"></script>
<script src="/js/bootstrap-tagsinput.min.js"></script>
<script src="/js/jodit.min.js"></script>
<script src="/js/xzoom.min.js"></script>
<script src="/js/fb-script.js"></script>
<script src="/js/lazysizes.min.js"></script>
<script src="/js/intlTelInput.min.js"></script>

<!-- App JS -->
<script src="/js/active-shop.js"></script>
<script src="/js/main.js"></script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</body>
</html>
