<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Exports\ProductsExport;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(5);
    return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
    public function create()
    {
    return view('products.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required',
        'category' => 'required',
        'price' => 'required|numeric',
        'description' => 'nullable',
    ]);

    Product::create($request->except('_token'));

    return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
    return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
    $request->validate([
        'name' => 'required',
        'category' => 'required',
        'price' => 'required|numeric',
        'description' => 'nullable',
    ]);

    $product->update($request->all());

    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
    public function export() 
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

    public function showUploadForm()
    {
    return view('products.upload');
    }

    public function upload(Request $request)
    {
    $file = $request->file('file');

    \Excel::import(new ProductImport, $file);

    return redirect()->route('products.index')->with('success', 'Product data uploaded successfully.');
    }

}
