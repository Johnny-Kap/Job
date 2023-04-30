@include('includes.head')

@include('includes.styles')

<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-primary">Login</h2>
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"> Home </a></li>
            <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Login </span></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--=================================
  inner banner -->

  <!--=================================
  Signin -->
  <section class="space-ptb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-10 col-md-12">
          <div class="login-register">
            <div class="section-title">
             <h4 class="text-center">Login to Your Account</h4>
            </div>
            <fieldset>
              <legend class="px-2">Choose your Account Type</legend>
              <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
                <li class="nav-item me-4">
                  <a class="nav-link active"  data-bs-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                    <div class="d-flex">
                      <div class="tab-icon">
                        <i class="flaticon-users"></i>
                      </div>
                      <div class="ms-3">
                        <h6 class="mb-0">Candidate / Employeer</h6>
                        <p class="mb-0">Log in</p>
                      </div>
                    </div>
                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link"  data-bs-toggle="tab" href="#employer" role="tab" aria-selected="false">
                    <div class="d-flex">
                      <div class="tab-icon">
                        <i class="flaticon-suitcase"></i>
                      </div>
                      <div class="ms-3">
                        <h6 class="mb-0">Employer</h6>
                        <p class="mb-0">Log in as Employer</p>
                      </div>
                    </div>
                  </a>
                </li> --}}
              </ul>
            </fieldset>
            <div class="tab-content">
              <div class="tab-pane active" id="candidate" role="tabpanel">
                <form class="mt-4" method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="row">
                    <div class="mb-3 col-12">
                      <label class="form-label" for="Email2">Email Address</label>
                      <input type="email" id="email" name="email" class="form-control" id="Email2" @error('email') is-invalid @enderror value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="mb-3 col-12">
                      <label class="form-label" for="password2">Password*</label>
                      <input type="password" name="password" class="form-control" id="password2" @error('password') is-invalid @enderror required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary d-grid">
                            Se connecter
                        </button>
                    </div>
                    <div class="col-md-6">
                      <div class="mt-3 mt-md-0 forgot-pass">
                        <a href="#">Forgot Password?</a>
                        <p class="mt-1">Don't have account? <a href="{{route('register')}}">Sign Up here</a></p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              {{-- <div class="tab-pane fade" id="employer" role="tabpanel">
                <form class="mt-4">
                  <div class="row">
                    <div class="mb-3 col-12">
                      <label class="form-label" for="Email2">Email Address</label>
                      <input type="email" id="email" name="email" class="form-control" id="Email2" @error('email') is-invalid @enderror value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="mb-3 col-12">
                      <label class="form-label" for="password2">Password *</label>
                      <input type="password" name="password" class="form-control" id="password2" @error('password') is-invalid @enderror required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <button type="submit" class="btn btn-primary d-grid">
                        Se connecter
                    </button>
                    </div>
                    <div class="col-md-6">
                      <div class="ms-md-3 mt-3 mt-md-0">
                        <a href="#">Forgot Password?</a>
                        <p class="mt-1">Don't have account? <a href="{{route('register')}}">Sign Up here</a></p>
                      </div>
                    </div>
                  </div>
                </form>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Signin -->

  @include('includes.scripts')

</body>
</html>
