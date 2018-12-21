<?php

namespace App\Http\Controllers;

use Illuminate\Config\Repository;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Repository $config)
    {
        return $config->get('database');
    }
}
