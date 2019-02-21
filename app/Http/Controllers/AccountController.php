<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule; //import Rule class 

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $user = Auth::user();
        return view('pages.my-account', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $validate = $request -> validate([
            'Fname' => 'required', 'string', 'max:255',
            'Sname' => 'required', 'string', 'max:255',
            'email' => 'required|unique:users,email,'.$user->id,
            'password' => 'required', 'string', 'min:6', 'confirmed',
            'address' => 'required', 'string', 'max:255',
            'Pcode' => 'required', 'string', 'max:255',
        ]);
        
        $user->Fname = request('Fname');
        $user->Sname = request('Sname');
        $user->email = request('email');
        $user->address = request('address');
        $user->Pcode = request('Pcode');
        $user->password = Hash::make(request('password'));
        $user->save();
        return back();

    }

}
