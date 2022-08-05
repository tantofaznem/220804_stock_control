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

                               

                               <form action="<?php echo url('/') ?>/admin_login" method="post">
                                      {{ csrf_field() }}
                                      <div class="input-group mb-3">
                                             <input type="text" class="form-control" name="employeeID" id="employeeID" placeholder="Employee ID" required="">
                                             <div class="input-group-append">
                                                    <div class="input-group-text">
                                                           <span class="fas fa-envelope"></span>
                                                    </div>
                                             </div>
                                      </div>
                                      <div class="input-group mb-3">
                                             <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                                             <div class="input-group-append">
                                                    <div class="input-group-text">
                                                           <span class="fas fa-lock"></span>
                                                    </div>
                                             </div>
                                      </div>
                                      <div class="row">

                                             <!-- /.col -->
                                             <div class="col-4">
                                                    <button type="submit"  class="btn btn-primary btn-block" style="margin-left: 109px;">Sign In</button>
                                             </div>
                                             <!-- /.col -->
                                      </div>
                               </form>

                        </div>
                        <!-- /.login-card-body -->
                 </div>
          </div>
          <!-- /.login-box -->

          @include('Admin.footer')

   </body
