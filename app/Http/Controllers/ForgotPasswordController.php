<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request; 
use App\Models\User; 

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\newMail;
use Illuminate\Support\Facades\Password;
use App\Providers\RouteServiceProvider;

use Carbon\Carbon; 

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

  

class ForgotPasswordController extends Controller

{

      /**

       * Write code on Method

       *

       * @return response()

       */

      public function showForgetPasswordForm()

      {

         return view('auth.forgot-password');

      }

  

      /**

       * Write code on Method

       *

       * @return response()

       */

      public function submitForgetPasswordForm(Request $request)

      {

          $request->validate([

              'email' => 'required|email|exists:users',

          ]);

  

          $token = Str::random(64);

          

          DB::table('password_resets')->insert([

              'email' => $request->email, 

              'token' => $token, 

              'created_at' => Carbon::now()

            ]);

  

            Mail::to($request->email)->send(new newMail($token));

            // Mail::to($request->email)->send(new newMail($token));

  

          return back()->with('status', 'We have e-mailed your password reset link!')->withInput();;

      }

      /**

       * Write code on Method

       *

       * @return response()

       */

      public function showResetPasswordForm(Request $request, $token) { 
        $email = $request->email;

         return view('auth.reset-password', ['token' => $token, 'email' => $email]);

      }

  

      /**

       * Write code on Method

       *

       * @return response()

       */

      public function submitResetPasswordForm(Request $request)

      {

          $request->validate([

              'email' => 'required|email|exists:users',

              'password' => 'required|string|min:6|confirmed',

              'password_confirmation' => 'required'

          ]);

  

          $updatePassword = DB::table('password_resets')

                              ->where([

                                'email' => $request->email, 

                                'token' => $request->token

                              ])

                              ->first();

  

          if(!$updatePassword){

              return back()->withInput()->with('error', 'Invalid token!');

          }

  

          $user = User::where('email', $request->email)

                      ->update(['password' => Hash::make($request->password)]);

 

          DB::table('password_resets')->where(['email'=> $request->email])->delete();

  

          return back()->with('message', 'Your password has been changed!');

      }

}
