<?php

namespace App\Http\Controllers;

use App\Products;
use App\Category;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        
        return view('adminComponent.products',['allprod'=>Products::index()],['category'=>Category::index()]);
    }
    
    //of addproducts 
    public function store(Request $request){
        return view ('adminComponent.index',['message'=> Products::addProd($request)]);
    }

    public function show($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
        dd("update");
    }

    public function destroy($product)
    {
        //
        
        return view ('adminComponent.index',[ 'message'=>Products::deleteProd($product)]);
    }

    //method for buy product use a client
    public function showProd($productbuy_id){
        
        return view('clientComponent.buyclient',['product'=>Products::showprod($productbuy_id)]);

    }
    //for use all categori
    public function addproducts()
    {
        //RETORNAMOS A LA VISTA ADDPRODUCTS
        return view('adminComponent.addproducts',["category" => Category::index()]);
    }
}