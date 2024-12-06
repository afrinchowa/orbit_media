<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    // this method will show products page
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('products.list', [
            'products' => $products
        ]);
    }
    // this method will create products page
    public function create()
    {
        return view('products.create');
    }
    // this method will store products page
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'url' => 'required|min:3',
        ];
        if ($request->image != "") {
            $rules['image'] = 'image';
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }

        // here we will store product in db
        $product = new Product();
        $product->name = $request->name;
        $product->url = $request->url;
        $product->description = $request->description;
        $product->save();

        if ($request->image != "") {
            // Here we will store image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext; //unique image name
            // save image to product directory
            $image->move(public_path('uploads/products'), $imageName);
            // save image name in database
            $product->image = $imageName;
            $product->save();
        }


        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }
    // this method will edit products page
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', [
            'product' => $product
        ]);
    }
    // this method will update products page
    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $rules = [
            'name' => 'required|min:5',
            'url' => 'required|min:3',
        ];
        if ($request->image != "") {
            $rules['image'] = 'image';
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('products.edit', $product->id)->withInput()->withErrors($validator);
        }

        // here we will update product in db

        $product->name = $request->name;
        $product->url = $request->url;
        $product->description = $request->description;
        $product->save();

        if ($request->image != "") {

            // delete old image
            File::delete(public_path('uploads/products' . $product->image));
            // Here we will update image
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext; //unique image name
            // save image to product directory
            $image->move(public_path('uploads/products'), $imageName);
            // save image name in database
            $product->image = $imageName;
            $product->save();
        }


        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    // this method will delete products page
    public function destroy($id) {
        $product = Product::findOrFail($id);

        // delete image
        File::delete(public_path('uploads/products' . $product->image));
// delete product from database
$product->delete();

return redirect()->route('products.index')->with('success','Product deleted successfully');


    }
}
