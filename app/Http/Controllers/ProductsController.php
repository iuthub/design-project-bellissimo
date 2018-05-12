<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Session;



class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index')->with('products', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();

        if($categories->count()==0){
            Session::flash('info', 'You must have some categories before attempting to create a product');
            return redirect()->back();
        }

        return view('admin.products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $this->validate($request,[
            'title' => 'required',
            'featured'=>'required|image',
            'price'=>'required',
            'content'=>'required',
            'category_id'=>'required',
            
        ]);

        $featured = $request->featured;

        $featured_new_name=time().$featured->getClientOriginalName();

        $featured->move('uploads/products/', $featured_new_name);

        $product= Product::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'featured'=>'uploads/products/' . $featured_new_name,

            'price'=>$request->price,
            
            'category_id'=>$request->category_id,
            'slug'=>str_slug($request->name)
           
        ]);

        Session::flash('success', 'Product created successfully.');

       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.products.edit')->with('product', $product)
                ->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'title'=>'required',
            'content'=>'required',
            'price'=>'required',
            'category_id'=>'required'
        ]);

        $product=Product::find($id);

        if($request->hasFile('featured')){
            $featured = $request->featured; 

            $featured_new_name=time().$featured->getClientOriginalName();

            $featured->move('uploads/products', $featured_new_name);

            $product->featured = 'uploads/products/'. $featured_new_name;

        }

        $product->title=$request->title;

        $product->content=$request->content;

        $product->price=$request->price;

        $product->category_id=$request->category_id;

        $product->save();

        Session::flash('success', 'Product updated succesfully');

        return redirect()->route('products');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        
        $product->delete();

        Session::flash('success', 'The product trashed.');

        return redirect()->back();
    }

    public function trashed(){
        $products = Product::onlyTrashed()->get();
        
        return view('admin.products.trashed')->with('products', $products); 
    }

    public function kill($id){
        $product=Product::withTrashed()->where('id', $id)->first();
        
        $product->forceDelete();

        Session::flash('success', 'Product deleted permanetly');

        return redirect()->back();

    }

    public function restore($id){
        $product = Product::withTrashed()->where('id', $id)->first();

        $product->restore();

        Session::flash('success', 'Restored successfully');

        return redirect()->route('products');
    }
}
