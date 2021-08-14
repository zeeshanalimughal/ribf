@extends('admin.layouts.profile')

        @section('profile-content')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class='container mt-5 col-md-10 mt-100'>
                    <div class="card col col-md-12">
                        <div class="card-content">
                            <div class="card-body p-0">
                                <div class="profile" style="position: relative"> <img src="{{asset('../uploads/'.$user->profile_pic)}}" alt="{{$user->profile_pic}}">
                                    <a href="{{url('admin/updatePic')}}/{{$user->id}}"><i style="position: absolute;font-size: 28px;bottom:20px;left:61%;transform: translateX(-50%); color: #AB47BC" class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                </div>
                                <div class="card-title">{{$user->name}}<br />
                                <div class="card-subtitle">
                                    <p class="text-muted">{{$user->email}}</p>
                                </div>
                                    <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate ad nesciunt, doloribus numquam assumenda eum. Tempora nulla officia cumque earum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="ft">
                      <a href="{{url('admin/update-profile')}}/{{$user->id}}"><Button class="btn btn-outline">Update Profile</Button></a>

                      <a href="{{url('admin/admin-reset-password')}}/{{$user->id}}"><Button class="btn btn-outline">Reset Password</Button></a>
                    </div>
                </div>

            </div>
    </div>
  @stop
