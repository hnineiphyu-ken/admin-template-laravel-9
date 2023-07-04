<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/template/html/assets/"
  data-template="horizontal-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ trans('panel.site_title') }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('/template/html/assets/img/favicon/favicon.ico" /> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('template/html/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('template/html/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('template/html/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Core CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('/template/html/assets/vendor/css/rtl/core.css" class="template-customizer-core-css')}}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('/template/html/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css')}}" /> --}}
    <link rel="stylesheet" href="{{ asset('template/html/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('/template/html/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/template/html/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('/template/html/assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{ asset('/template/html/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('/template/html/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('template/html/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/html/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('/template/html/assets/vendor/css/pages/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{ asset('/template/html/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('/template/html/assets/vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/template/html/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card p-2">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="{{ asset('logo.png') }}" alt="" width="80">
                  {{-- <span style="color: #666cff">
                    <svg width="268" height="150" viewBox="0 0 38 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M30.0944 2.22569C29.0511 0.444187 26.7508 -0.172113 24.9566 0.849138C23.1623 1.87039 22.5536 4.14247 23.5969 5.92397L30.5368 17.7743C31.5801 19.5558 33.8804 20.1721 35.6746 19.1509C37.4689 18.1296 38.0776 15.8575 37.0343 14.076L30.0944 2.22569Z"
                        fill="currentColor" />
                      <path
                        d="M30.171 2.22569C29.1277 0.444187 26.8274 -0.172113 25.0332 0.849138C23.2389 1.87039 22.6302 4.14247 23.6735 5.92397L30.6134 17.7743C31.6567 19.5558 33.957 20.1721 35.7512 19.1509C37.5455 18.1296 38.1542 15.8575 37.1109 14.076L30.171 2.22569Z"
                        fill="url(#paint0_linear_2989_100980)"
                        fill-opacity="0.4" />
                      <path
                        d="M22.9676 2.22569C24.0109 0.444187 26.3112 -0.172113 28.1054 0.849138C29.8996 1.87039 30.5084 4.14247 29.4651 5.92397L22.5251 17.7743C21.4818 19.5558 19.1816 20.1721 17.3873 19.1509C15.5931 18.1296 14.9843 15.8575 16.0276 14.076L22.9676 2.22569Z"
                        fill="currentColor" />
                      <path
                        d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                        fill="currentColor" />
                      <path
                        d="M14.9558 2.22569C13.9125 0.444187 11.6122 -0.172113 9.818 0.849138C8.02377 1.87039 7.41502 4.14247 8.45833 5.92397L15.3983 17.7743C16.4416 19.5558 18.7418 20.1721 20.5361 19.1509C22.3303 18.1296 22.9391 15.8575 21.8958 14.076L14.9558 2.22569Z"
                        fill="url(#paint1_linear_2989_100980)"
                        fill-opacity="0.4" />
                      <path
                        d="M7.82901 2.22569C8.87231 0.444187 11.1726 -0.172113 12.9668 0.849138C14.7611 1.87039 15.3698 4.14247 14.3265 5.92397L7.38656 17.7743C6.34325 19.5558 4.04298 20.1721 2.24875 19.1509C0.454514 18.1296 -0.154233 15.8575 0.88907 14.076L7.82901 2.22569Z"
                        fill="currentColor" />
                      <defs>
                        <linearGradient
                          id="paint0_linear_2989_100980"
                          x1="5.36642"
                          y1="0.849138"
                          x2="10.532"
                          y2="24.104"
                          gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-opacity="1" />
                          <stop offset="1" stop-opacity="0" />
                        </linearGradient>
                        <linearGradient
                          id="paint1_linear_2989_100980"
                          x1="5.19475"
                          y1="0.849139"
                          x2="10.3357"
                          y2="24.1155"
                          gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-opacity="1" />
                          <stop offset="1" stop-opacity="0" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </span> --}}
                </span>
                {{-- <span class="app-brand-text demo text-heading fw-bold">Z</span> --}}
              </a>
            </div>
            <!-- /Logo -->

            <div class="card-body mt-2">
              <h4 class="mb-2 fw-semibold">Welcome to {{ trans('panel.site_title') }}! 👋</h4>
              {{-- <p class="mb-4">Please sign-in to your account and start the adventure</p> --}}

              <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                @csrf
                {{-- <div class="form-floating form-floating-outline mb-3">
                  <input
                    type="text"
                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    id="email"
                    name="email"
                    placeholder="{{ trans('global.login_email') }}"
                    autofocus />
                  <label for="email">{{ trans('global.login_email') }}</label>
                  @if($errors->has('email'))
                      <div class="invalid-feedback">
                          {{ $errors->first('email') }}
                      </div>
                  @endif
                </div> --}}
                <div class="form-floating form-floating-outline mb-3">
                  <input
                    type="text"
                    class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                    id="phone"
                    name="phone"
                    placeholder="{{ trans('global.login_phone') }}"
                    autofocus />
                  <label for="phone">{{ trans('global.login_phone') }}</label>
                  @if($errors->has('phone'))
                      <div class="invalid-feedback">
                          {{ $errors->first('phone') }}
                      </div>
                  @endif
                </div>
                <div class="mb-3">
                  <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input
                          type="password"
                          id="password"
                          class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                          name="password"
                          placeholder="{{ trans('global.login_password') }}"
                          aria-describedby="password" />
                        <label for="password">{{ trans('global.login_password') }}</label>
                      </div>
                      <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                    </div>
                  </div>
                </div>
                {{-- <div class="mb-3 d-flex justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me">{{ trans('global.remember_me') }}</label>
                  </div>
                  <a href="auth-forgot-password-basic.html" class="float-end mb-1">
                    <span>Forgot Password?</span>
                  </a>
                </div> --}}
                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">
                        {{ trans('global.login') }}
                    </button>
                </div>
              </form>

              {{-- <p class="text-center">
                <span>New on our platform?</span>
                <a href="auth-register-basic.html">
                  <span>Create an account</span>
                </a>
              </p>

              <div class="divider my-4">
                <div class="divider-text">or</div>
              </div>

              <div class="d-flex justify-content-center gap-2">
                <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-facebook">
                  <i class="tf-icons mdi mdi-24px mdi-facebook"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-twitter">
                  <i class="tf-icons mdi mdi-24px mdi-twitter"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-github">
                  <i class="tf-icons mdi mdi-24px mdi-github"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-lg rounded-pill btn-text-google-plus">
                  <i class="tf-icons mdi mdi-24px mdi-google"></i>
                </a>
              </div> --}}
            </div>
          </div>
          <!-- /Login -->
          <img
            alt="mask"
            src="{{ asset('/template/html/assets/img/illustrations/auth-basic-login-mask-light.png')}}"
            class="authentication-image d-none d-lg-block"
            data-app-light-img="illustrations/auth-basic-login-mask-light.png"
            data-app-dark-img="illustrations/auth-basic-login-mask-dark.png" />
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('/template/html/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('/template/html/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('/template/html/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ asset('/template/html/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('/template/html/assets/vendor/libs/node-waves/node-waves.js')}}"></script>

    <script src="{{ asset('/template/html/assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{ asset('/template/html/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{ asset('/template/html/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <script src="{{ asset('/template/html/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('/template/html/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{ asset('/template/html/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{ asset('/template/html/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('/template/html/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ asset('/template/html/assets/js/pages-auth.js')}}"></script>
  </body>
</html>