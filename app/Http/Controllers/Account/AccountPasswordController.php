<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;

class AccountPasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('account.password.change_password');
    }

    public function update()
    {

    }
}
