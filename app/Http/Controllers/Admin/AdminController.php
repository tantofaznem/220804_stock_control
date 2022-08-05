<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use App\Model\admin;
use Session;
use Validator;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Redirect;

class AdminController extends BaseController {

   function admin(Request $request) {
              if (empty($request->session()->has('id'))) {
                     return view('Admin/loginpage');
              } else {
                     return Redirect::to('dashboard');
              }
       }

   function admin_login(Request $request) {
              $employeeID = $request->employeeID;
              $password = $request->password;

              $login = admin::where(['employeeID' => $employeeID, 'password' => $password])->first();

              if (!empty($login)) {

                     //Store Session
                     $request->session()->put(['id' => $login->id]);
                     return Redirect::to('dashboard');
              } else {
                     return back()->with('error', 'Your Employee ID Or Password is Wrong!');
              }
       }

   function register(Request $request) {
            
           return view('Admin/register');
             
       }
   function logout(Request $request) {
              Session::forget('id');
              if (!Session::has('id')) {
                     return view('Admin/Adminlogin');
              }
       }

    function signup(Request $request){  

        $request->validate([

            'fullname' => 'required',
            'employeeID' => 'required|email',
            'password' => 'required',

        ]);

        $data = $request->all();

        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('Registration Success');

    }

    function dashboard(Request $request) {
              if (Session::get('id')) {
                     return view('Admin/dashboard');
              } else {
                     return view('Admin/loginpage');
              }
       }

}
