<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/skydash') }}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('assets/skydash') }}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/skydash') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/skydash') }}/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/skydash') }}/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/skydash') }}/images/logo.svg" alt="logo">
                                </a>
                            </div>
                            <h4>Hello!</h4>
                            <h6 class="font-weight-light">Login untuk melanjutkan.</h6>
                            <div id="disappear">
                                @if (session()->has('message'))
                                    <div class="alert alert-success fade show" role="alert">
                                        {{ session()->get('message') }}
                                    </div>
                                @elseif ($errors->any())
                                    <div class="alert alert-danger fade show" role="alert">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <form action="{{ route('auth.login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-lg"
                                        placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        placeholder="Password" required>
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        IN</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/skydash') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/skydash') }}/js/off-canvas.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/template.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/settings.js"></script>
    <script src="{{ asset('assets/skydash') }}/js/todolist.js"></script>
    <script>
        $('#disappear').delay('slow').slideDown('slow').delay(10000).slideUp(600);
    </script>
    <!-- endinject -->
</body>

</html>
