<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resourses\UserResourse;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Product::paginate(3);
        return view('dashboard',compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.add-product');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data=['productName'=> $request->name,'price'=>$request->price,'image'=>"image",'discount'=>$request->discount,'desription'=>$request->desc,];
        Product::create($data);
        return back();


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $users= Product::where('id',$id)->get();
       return UserResource::collection($users);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $data=Product::find($product->id);
       
        return view('products.edit-product',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
          $data=['productName'=> $request->name,'price'=>$request->price,'image'=>"image",'discount'=>$request->discount,'desription'=>$request->desc,];

        Product::where('id',$product->id)->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return back();
    }
}
