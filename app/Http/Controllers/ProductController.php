<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $products = DB::table('products')->get();
        $products=  Product::all();
        //return view('product',  compact('products'));
    return view('product', ['product' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required|min:3']);

        $request->validate([ 'precio'=>'required|integer']);
        $request->validate([ 'cantidad'=>'required|integer']);

        $product=new Product;
        $product->name= $request->input('name');
        $product->precio= $request->input('precio');
        $product->cantidad= $request->input('cantidad');
        $product->save();

        return redirect()->route('product.index');
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
        $product= Product::find($id);
        //$product->delete();

        //return redirect()->route('/edit',['product' => $product]);
        return view('edit', ['product' => $product]);
        //
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
    $product= Product::find($id);
     $request->validate([
            'name'=>'required|min:3']);

        $request->validate([ 'precio'=>'required|integer']);
        $request->validate([ 'cantidad'=>'required|integer']);
        $product->name= $request->input('name');
        $product->precio= $request->input('precio');
        $product->cantidad= $request->input('cantidad');
        $product->save();
         return redirect()->route('product.index')->with('sucess','producto actualizado');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= Product::find($id);
        $product->delete();

        return redirect()->route('product.index');
        //return compact(Product::find($id));
        //
    }
}
