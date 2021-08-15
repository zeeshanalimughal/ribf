<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.inc.head')
</head>

<body>
    <div id="auth" >
        <div class="row">
            <div class="col-lg-5 col-12">
                <div id="auth-left" style="margin-bottom: 7rem">
                    <div class="auth-logo" >
                        <a href="index.html"><img style="height: 30px" src="assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>

                    @if (session()->has('error'))
                    <div class="alert alert-danger">
                        <strong>{{ session()->get("error")
                        }}{{session()->forget('error')}}</strong>
                    </div>
                    @endif

                    <form accept="{{ url('/admin') }}/login" method="post">
                        @csrf
                        <div class="form-group position-relative has-icon-left">
                            <input type="text" name="email" value="{{old('email')}}" class="form-control form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            <span class="text-danger small">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl"
                                placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <span class="text-danger small">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    {{-- <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="auth-register.html"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
