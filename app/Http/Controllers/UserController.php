<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function login(Request $req)
    {
       $user= User::where(['email'=>$req->email])->first();
       if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    public function register(Request $req)
{
    // Create a new User object
    $user = new User;
    
    // Set the name, email, and password for the user
    $user->name = $req->input('name');
    $user->email = $req->input('email');
    $user->password = bcrypt($req->input('password'));
    
    // Save the user to the database
    $user->save();
    
    // Redirect the user to a confirmation page
    return redirect('/login');
}

}
