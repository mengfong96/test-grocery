<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class ProductController extends Controller
{
    protected function validator(array $data) {
        return Validator::make($data, [
          'name' => ['required', 'string', 'max:255'],
          'image_path' => ['required'],
          'desc' => ['required', 'string', 'max:255'],
          'overview' => ['required'],
          'product_category_id' =>   ['required'],
        ]);
    }   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        return Product::create($req->all());
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Product::find($id);

        // $user_pax = "2";
        // $meal_num = "1";
        // $product_id = "1";
        

        // $recommendQuantity = shell_exec("python C:\Users\yenya\OneDrive\Desktop\RecommendQuantity.py $user_pax $meal_num $product_id");
        // dd ($recommendQuantity);
        //return $recommendQuantity;
        //return $data;
        return view('product.show', ['product' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $data=Product::find($id);
        $data->update($request->all());
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Product::find($id);
        $data->delete();
        return $data;
    }
}
