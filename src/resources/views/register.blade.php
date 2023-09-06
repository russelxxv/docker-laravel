<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ ('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.min.css?v=3.1.0') }}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Register</h4>
                  <p class="mb-0">Please fillout the form below to register an AD Account and Portal Account. Then ICTMS Team will confirm your registration</p>
                </div>
                @if ($errors->any())
                  <div class="alert text-danger border border-danger">
                    <strong>Error!</strong><br />
                      <ul>
                        @foreach ($errors->all() as $key => $error)
                          <li>{{ $key }} | {{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                @endif
                <div class="card-body">
                  <form role="form" method="post" id="form-user-registration" name="form_user_registration" action="{{ route('register.store') }}">
                    @csrf
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">First name</label>
                      <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" id="first-name" value="{{ old('firstname') }}" required>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Middle name</label>
                      <input type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" id="middle-name" value="{{ old('middlename') }}">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Last name</label>
                      <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" id="last-name" value="{{ old('lastname') }}" required>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">DSWD Email</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Create Password</label>
                      <input type="password" class="form-control" name="password" id="password-confirmed" required>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Confirm password</label>
                      <input type="password" class="form-control" name="password_confirmed" id="password_confirmed" required>
                    </div>

                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="1" name="terms_and_condition" id="terms-and-condition" required>
                      <label class="form-check-label" for="terms-and-condition">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Register</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="../pages/sign-in.html" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.1.0') }}"></script>
</body>

<script>
  $(document).ready(function() {
    $("input.form-control").each(function() { focused(this); console.log(`attr: ${$(this).attr("id")}`) });
  });
</script>
</html>