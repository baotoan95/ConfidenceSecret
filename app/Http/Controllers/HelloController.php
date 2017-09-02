<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return "Hello there";
    }

    public function hello($name) {
        return "Hello " . $name;
    }

    public function first() {
        return "First";
    }
}
