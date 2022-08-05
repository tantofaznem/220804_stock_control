@include('Admin.headerfile')
    @include('Admin.sidebar')

   <body class="hold-transition login-page">
          <div class="login-box">
                 <div class="login-logo">
                      
                 </div>

                 <div class="card">
                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                               <button type="button" class="close" data-dismiss="alert">×</button>
                               <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <div class="card-body login-card-body" style="text-align: center;">

                               

                                <form action="<?php echo url('/') ?>/signup" method="POST">

                          @csrf

                          <div class="form-group row">

                              <label for="name" class="col-md-4 col-form-label text-md-right">Full name</label>

                              <div class="col-md-6">

                                  <input type="text" id="name" class="form-control" name="name" required autofocus>

                                  @if ($errors->has('name'))

                                      <span class="text-danger">{{ $errors->first('name') }}</span>

                                  @endif

                              </div>

                          </div>

  

                          <div class="form-group row">

                              <label for="employeeID" class="col-md-4 col-form-label text-md-right">Employee ID</label>

                              <div class="col-md-6">

                                  <input type="text" id="employeeID" class="form-control" name="employeeID" required autofocus>



                              </div>

                          </div>

  

                          <div class="form-group row">

                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                              <div class="col-md-6">

                                  <input type="password" id="password" class="form-control" name="password" required>

                                  @if ($errors->has('password'))

                                      <span class="text-danger">{{ $errors->first('password') }}</span>

                                  @endif

                              </div>

                          </div>

  

                          <div class="form-group row">

                              <div class="col-md-6 offset-md-4">

                                  <div class="checkbox">

                                      <label>

                                          <input type="checkbox" name="remember"> Remember Me

                                      </label>

                                  </div>

                              </div>

                          </div>

  

                          <div class="col-md-6 offset-md-4">

                              <button type="submit" class="btn btn-primary">

                                  Register

                              </button>

                          </div>

                      </form>

                        </div>
                        <!-- /.login-card-body -->
                 </div>
          </div>
          <!-- /.login-box -->

          @include('Admin.footer')

   </body
