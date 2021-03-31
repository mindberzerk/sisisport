<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class AccountHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);/*->only(['store', 'destroy']);*/
    }

    //user_id...
    public function index()
    {

        //...array..>post(index.blade.php)
        return view('pages.accounthistory');
    }
}
