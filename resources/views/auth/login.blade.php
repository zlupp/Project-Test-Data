<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description"
    content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
  <meta name="keywords"
    content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>Login | Test Data</title>
  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon-152x152.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- BEGIN: VENDOR CSS-->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/vendors.min.css') }}"> -->
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/materialize.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.cs') }}s">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css') }}">
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
  <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body
  class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 1-column login-bg  blank-page blank-page"
  data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
  <div class="row">
    <div class="col s12">
      <div class="container">
        <div id="login-page" class="row">
          <div class="col s12 m6 l7 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
            <div class="row">
              <div class="col s6">
                <center>
                    <img src="{{ asset('assets/images/apple-touch-icon-152x152.png') }}" style="margin-top: 35%;">
                </center>
              </div>
              <div class="col s6">
                <form class="login-form">
                  <div class="row">
                    <div class="input-field col s12">
                      <h5 class="ml-4"><center>Sign in</center></h5>
                    </div>
                  </div>
                  <div class="row margin">
                    <div class="input-field col s12">
                      <i class="material-icons prefix pt-2">person_outline</i>
                      <input id="username" type="text">
                      <label for="username" class="center-align">Username</label>
                    </div>
                  </div>
                  <div class="row margin">
                    <div class="input-field col s12">
                      <i class="material-icons prefix pt-2">lock_outline</i>
                      <input id="password" type="password">
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12 m12 l12 ml-2 mt-1">
                      <p>
                        <label>
                          <input type="checkbox" />
                          <span>Remember Me</span>
                        </label>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <a href="index.html"
                        class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6 m6 l6">
                      <p class="margin medium-small"><a href="user-register.html">Register Now!</a></p>
                    </div>
                    <div class="input-field col s6 m6 l6">
                      <p class="margin right-align medium-small"><a href="user-forgot-password.html">Forgot password
                          ?</a>
                      </p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- BEGIN VENDOR JS-->
  <script src="{{ asset('assets/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN THEME  JS-->
  <script src="{{ asset('assets/js/plugins.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/custom-script.js') }}" type="text/javascript"></script>
  <!-- END THEME  JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <!-- END PAGE LEVEL JS-->
</body>

</html>