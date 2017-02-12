<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products =  Products::all();

        return view('products.index')->with("products", $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Products($request->all());

        $img = $request->file('photo');
        $file = str_random(30)."-".$img->getClientOriginalName();
        $products->photo = $file;

        $img->move(public_path().'/files/', $file);

        if($products->save())
        {
            return view('products.create');
        }
        else
        {
            return redirect('/login');
        }
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
        $products = Products::find($id);
        return view('products.edit')->with("products", $products);
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
        $update = Products::find($id);
        $update->fill($request->all());

        $img = $request->photo;

        $img_actually = Products::find($id)->photo;

        if($img == "")
        {
            $update->photo = $img_actually;
        }
        else
        {
            $file = str_random(30)."-".$img->getClientOriginalName();

            $update->photo = $file;

            $img->move(public_path().'/files/', $file);
        }

        $update->save();
        return view('products.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Products::find($id);
        $p->delete();

        echo "Producto eliminado correctamente";
    }
}
