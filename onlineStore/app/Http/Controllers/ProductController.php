<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Inertia\Response;
use Inertia\Inertia;

class ProductController extends Controller
{
    //Constante de apginacion
    const NUMBER_OF_ITEMS_PER_PAGE = 15;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listar todos los productos que se tiene
        $products = Product::paginate(self::NUMBER_OF_ITEMS_PER_PAGE);
        return inertia('Products/Index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //traer informacion para añadir la categoria y la marca a la que pertenece
        $categories = Category::all();
        $brands = Brand::all();
        return inertia('Products/Create', ['categories' => $categories, 'brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param App\Http\Requests\ProductRequest
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return inertia('Products/Edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param App\Http\Requests\ProductRequest
     * @return Product $product
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param Product product
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');

    }



    //Metodos para recuperar los productos de BMW y Mercedes
    public function bmw(){
        $bmwProducts = Product::where('brand_id', 'BMW')->get();
        return inertia::render('Products/bmw', ['products' => $bmwProducts]);
    }

    public function mercedes(){
        $mercedesProducts = Product::where('brand_id', 'Mercedes')->get();
        return inertia('Products/mercedes', ['products' => $mercedesProducts]);
    }
}
