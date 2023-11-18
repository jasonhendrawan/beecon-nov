<?php

namespace App\Http\Controllers;

use App\Models\usertes;
use Illuminate\Http\Request;

class usertescontroller extends Controller
{

    public static function getAll() {
        return view('discover', [
            'usertes' => usertes::all()
        ]);
    }


}
