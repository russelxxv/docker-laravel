<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "firstname"     => "required|regex:/^([a-z ])+$/i",
            "middelname"    => "regex:/^([a-z ])+$/i",
            "lastname"      => "required:regex:/^([a-z ])+$/i",
            "email"         => "email:filter",
            "password"      => ['required', 'confirmed', Password::min(6)],
            "terms_and_condition" => "required|accepted"
        ]);
    }
}
