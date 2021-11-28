<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103119104,
            'Name' => 'Setyo Nugroho',
            'Gender' => 'Male',
            'Phone' => '081229559489',
            'Class' => 'XII RPL 6'
        ];
    }
}
