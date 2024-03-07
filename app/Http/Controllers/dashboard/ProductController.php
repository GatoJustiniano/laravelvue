<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Product;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('dashboard.products.index')->with([
            'products' => Product::without('images')->paginate(10),
        ]);
    }

    public function listarProducts()
    {         
        $data_setting = view()->shared('settingGeneral');
        $products = Product::all(); 
        foreach ($products as $product) {                                                                   
            $product->description_small = Str::limit($product->description, 10);
            $product->v_created_at = $product->created_at->format($data_setting->date_format . ' H:i:s');
            $product->v_updated_at = $product->updated_at->format($data_setting->date_format . ' H:i:s');
        }       
        return DataTables::of($products)            
            ->toJson();
    }

    public function create()
    {
        return view('dashboard.products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());

        foreach ($request->images as $image) {
            $product->images()->create([
                'path' => 'images/' . $image->store('products', 'images'),
            ]);
        }

        return redirect()
            ->route('dashboard.products.index')
            ->withSuccess("The new product with id {$product->id} was created");
        // ->with(['success' => "The new product with id {$product->id} was created"]);
    }

    public function show(Product $product)
    {
        return view('dashboard.products.show')->with([
            'product' => $product,
        ]);
    }

    public function edit(Product $product)
    {
        return view('dashboard.products.edit')->with([
            'product' => $product,
        ]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        if ($request->hasFile('images')) {
            foreach ($product->images as $image) {
                $path = storage_path("app/public/{$image->path}");

                File::delete($path);

                $image->delete();
            }

            foreach ($request->images as $image) {
                $product->images()->create([
                    'path' => 'images/' . $image->store('products', 'images'),
                ]);
            }
        }

        return redirect()
            ->route('dashboard.products.index')
            ->withSuccess("The product with id {$product->id} was edited");
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('dashboard.products.index')
            ->withSuccess("The product with id {$product->id} was deleted");
    }
}
