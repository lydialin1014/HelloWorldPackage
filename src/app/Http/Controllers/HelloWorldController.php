<?php

namespace Lydia\HelloWorld\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    public function index()
    {
        return view('HelloWorld::welcome');
    }
}
