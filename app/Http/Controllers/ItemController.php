<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function menampilkanItems($items)
    {
        return "Ini Halaman Item-item $items";
    }
}
