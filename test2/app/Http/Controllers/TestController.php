<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function hello($test)
  {
      return view('hello', [
        'test' => $test
      ]);
  }
}
