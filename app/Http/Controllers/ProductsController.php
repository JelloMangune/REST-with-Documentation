<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function allProducts(){
        $products = Products::all();
        return response()->json(['products'=>$products], 200);
    }

    public function singleProduct($product_id){
        $products = Products::find($product_id);
        return response()->json(['products'=>$products], 200);
    }

    public function searchProduct($title){
        $products = Products::where('title', 'LIKE', '%'. $title. '%')->get();
        if($products)
        {
            return response()->json(['products'=>$products], 200);
        }
        else
        {
            return response()->json(['message'=>'No Product Found'], 404);
        }
    }

    public function allCategories(){
        $retrieved_category = Products::select('category')->distinct()->get();
        $categories = array();
        foreach($retrieved_category as $category){
            array_push($categories, $category['category']);
        }
        return response()->json(['categories'=>$categories], 200);
    }

    public function productCategory($category_name){
        $products = Products::where('category', $category_name)->get();
        return response()->json(['products'=>$products], 200);
    }

    public function addProduct(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'currency'=>'required',
            'price'=>'required',
            'brand'=>'required',
            'category'=>'required',
            'image'=>'required'
        ]);

        $products = new Products; 
        $products->title = $request->title;
        $products->description = $request->description;
        $products->currency = $request->currency;
        $products->price = $request->price;
        $products->brand = $request->brand;
        $products->category = $request->category;
        $products->image = $request->image;
        $products->save();
        return response()->json(['message'=>'The Product Was Added Successfully'], 200);
    }

    public function updateProduct(Request $request, $product_id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'currency'=>'required',
            'price'=>'required',
            'brand'=>'required',
            'category'=>'required',
            'image'=>'required'
        ]);

        $products = Products::find($product_id);
        $products->title = $request->title;
        $products->description = $request->description;
        $products->currency = $request->currency;
        $products->price = $request->price;
        $products->brand = $request->brand;
        $products->category = $request->category;
        $products->image = $request->image;
        $products->update();
        return response()->json(['message'=>'The Product Was Updated Successfully'], 200);
    }
    
    public function deleteProduct(Request $request, $id){
        $products = Products::find($id);
        $products->delete();
        return response()->json(['message'=>'The Product Was Deleted Successfully'], 200);
    }

}
