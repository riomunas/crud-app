<?php

namespace App\Http\Controllers;

use App\TMasterProduk;
use Illuminate\Http\Request;
use App\Providers\Services\ProductService;

class ProductController extends Controller
{
    private $service;

    public function __construct(ProductService $service) {
        $this->middleware('jwt.auth');
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->service->all();
        return response()->json($products);
    }

    public function getById($id) {
        $product = $this->service->getById($id);
        return response()->json($product);
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
        $this->service->store($request);
        return response()->json(['message' => 'Successfull create new product']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TMasterProduk  $tMasterProduk
     * @return \Illuminate\Http\Response
     */
    public function show(TMasterProduk $tMasterProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TMasterProduk  $tMasterProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(TMasterProduk $tMasterProduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TMasterProduk  $tMasterProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->service->update($request->all(), $id);
        return response()->json(['message' => 'Successfull update product']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TMasterProduk  $tMasterProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->service->delete($id);
        return response()->json(['message' => 'Successfull delete product']);
    }
}
