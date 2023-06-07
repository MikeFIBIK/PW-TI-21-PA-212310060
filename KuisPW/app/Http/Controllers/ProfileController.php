<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
        $products = Products::latest()->paginate(5);
        return view('modules.master-data.products.index', compact('products'))
        ->with('i', (request()->('input'('page', 1) - 1) * 5);
}
