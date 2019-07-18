<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AccountFormRequest;

class AccountController extends Controller
{
    public function index() {
        //
    }

    public function showLogin() {
        return view('login');
    }

    public function login(AccountFormRequest $request) {
        $request = $request->validate([
            'username' => 'required|email',
            'password' => 'required|min:8|alpha_num'
        ]);
        $username = $request['username'];
        $password = $request['password'];

        $account = Account::where('username', '=', $username)->get();
        $account = response()->json($account)->getData();

        if(count($account) == 0) {
            return redirect('/login');
        }
        else if ($password != $account[0]->password){
            return redirect('/login');
        } else {
            return redirect('/article');
        }
    }

    public function showRegister() {
        return view('register');
    }

    public function register(AccountFormRequest $request) {
        $request = $request->validate([
            'username' => 'required|email',
            'password' => 'required|min:8|alpha_num',
            'displayname' => 'required|string',
            'accept' => 'accepted'
        ]);
        $username = $request['username'];
        $password = $request['password'];
        $displayname = $request['displayname'];
        
        $account = Account::where('username', '=', $username)->get();
        $account = response()->json($account)->getData();

        if(count($account) == 0) {
            Account::create([
                'username' => $username,
                'password' => $password,
                'displayname' => $displayname
            ]);
            return view('/login');
        } else {
            return redirect('/register');
        }
    }
}
