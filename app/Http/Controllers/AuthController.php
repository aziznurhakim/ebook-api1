<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103119116,
            'Name' => 'Muhammad Aziz Nurhakim',
            'Gender' => 'Male',
            'Phone' => '082241921785',
            'Class' => 'XII RPL 4'
        ];
    }
}
