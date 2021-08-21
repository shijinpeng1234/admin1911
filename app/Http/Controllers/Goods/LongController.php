<?php

namespace App\Http\Controllers\Goods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LongController extends Controller
{
    public function one()
    {
        echo "版本1.0";
        phpinfo();
    }
    public function two()
    {
        echo "版本2.0";
    }
}
