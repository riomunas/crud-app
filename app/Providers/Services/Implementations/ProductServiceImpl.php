<?php 
namespace App\Providers\Services\Implementations;

use App\TMasterProduk;
use App\Providers\Services\ProductService;
use Illuminate\Http\Request;

class ProductServiceImpl implements ProductService {
	public function all() {
		// $rs = app('db')->select("SELECT * FROM products");
		// return $rs;
    	return TMasterProduk::all();
	}

	public function store($request) {
        $product = new TMasterProduk();
        $product->kode_produk = $request->kode_produk;
        $product->nama_produk = $request->nama_produk;
        $product->activated = $request->activated;
        return $product->save();
	}

	public function getById($id) {
        return TMasterProduk::find($id);
	}

    public function update($request, $id) {
    	$product = TMasterProduk::find($id);
        return $product->update($request);
    }
    
    public function delete($id) {
    	return TMasterProduk::destroy($id);
    }
}