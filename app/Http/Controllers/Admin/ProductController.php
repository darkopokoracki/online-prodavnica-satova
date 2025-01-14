<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category', 'brand', 'product_images')->get();
        $brands = Brand::get();
        $categories = Category::get();

        return Inertia::render(
            'Admin/Product/Index',
            [
                'products' => $products,
                'brands' => $brands,
                'categories' => $categories
            ]
        );
    }

    public function store(Request $request)
    {
        // dd($request->file('product_images')); // for debugging.
        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();

        // ovde ulazimo samo ako smo za proizvod uplodovali i slike.
        if ($request->hasFile('product_images')) {
            $productImages = $request->file('product_images');
            foreach ($productImages as $image) {
                // Generate a unique name for the image using timestamp and random string
                $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                // Store the image in the public folder with the unique name
                $image->move('product_images', $uniqueName);
                // Create a new product image record with the product_id and unique name
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'product_images/' . $uniqueName,
                ]);
            }
        }
        return redirect()->route('admin.products.index')->with('success', 'Uspešno ste dodali proizvod');
    }

        //update 
        public function update(Request $request, $id)
        {
            $product = Product::findOrFail($id);
    
            // dd($product);
            $product->title = $request->title;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            // Check if product images were uploaded
            if ($request->hasFile('product_images')) {
                $productImages = $request->file('product_images');
                // Loop through each uploaded image
                foreach ($productImages as $image) {
                    // Generate a unique name for the image using timestamp and random string
                    $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
    
                    // Store the image in the public folder with the unique name
                    $image->move('product_images', $uniqueName);
    
                    // Create a new product image record with the product_id and unique name
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => 'product_images/' . $uniqueName,
                    ]);
                }
            }
            $product->update();
            return redirect()->route('admin.products.index')->with('success', 'Proizvod je uspešno izmenjen.');
        }

    public function deleteImage($id)
    {
        $image = ProductImage::where('id', $id)->delete();
        return redirect()->route('admin.products.index')->with('success', 'Fotografija je uspešno obrisana.');
    }

    public function destory($id)
    {
        $product = Product::findOrFail($id)->delete();
        return redirect()->route('admin.products.index')->with('success', 'Uspešno ste obrisali proizvod.');
    }
}
