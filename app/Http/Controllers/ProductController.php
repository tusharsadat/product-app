<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
    return view('products.index', compact('products'));
    }
    public function export() 
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
}
