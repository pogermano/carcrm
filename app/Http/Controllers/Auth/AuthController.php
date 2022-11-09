<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function store(Request $request) {
        $validator = Validator::make($request-> all(), [
            'name' => 'required|string|max:255',
            'email' =>

        ]);

    }
}
