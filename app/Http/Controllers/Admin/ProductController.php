<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\MultiImg;
use App\Models\Product;
use Image;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{

    public function view_products()
    {

       
        $products = Product::latest()->paginate(10);
        $products_trash = Product::onlyTrashed()->latest()->paginate(3);
        

        return view('admin.products.index', compact('products','products_trash'));
    }


    public function add_product()
    {
        $categories = Category::latest()->get();

        return view('admin.products.add', compact('categories'));
    }


    public function getSubCategories($category_id)
    {
        $subcategories = SubCategory::where('category_id', $category_id)->orderBy('subcategory_name', 'ASC')->get();
        return json_encode($subcategories);
    }

    
    public function store_product(Request $request)
    {


        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'product_name' => 'required|max:555',
            'product_qty' => 'required',
            'selling_price' => 'required',
            'description' => 'required',
            'product_thumbnail' => 'required|image|mimes:jpg,png,jpeg,webp|max:5048',
            
           
        ]);

        $image = $request->file('product_thumbnail');
        $ImageName = time() . '-' . str_replace( " ", "-", $request->product_name ) . '.' . $request->product_thumbnail->extension();

        //$request->product_thumbnail->move(public_path('/uploads/products/thumbnails'), $ImageName);
        $image->storeAs('uploads/', $ImageName, 's3');



        $product_id = Product::insertGetId([
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ', '-' , $request->product_name)),
            'product_qty' => $request->product_qty,
            'product_size' => $request->product_size,
            'product_color' => $request->product_color,
            'selling_price' => $request->selling_price,
            'description' => $request->description,
            'product_thumbnail' => $ImageName,
            'status' => 1,
            'created_at' => Carbon::now(),
            'new_arrivals' => $request->new_arrivals ? 1 : 0,
            'featured' => $request->featured ? 1 : 0,
        ]);

        
        // Multiple Image upload
       /* $images = $request->file('multi_imgs');
            foreach($images as $img){
                $newImageName = rand(10000,50000) . '-' . $request->product_name . '.' . $img->extension();
                $img->move(public_path('/uploads/products/images'), $newImageName);
                MultiImg::insert([
                    'product_id' => $product_id,
                    'image_name' => $newImageName,
                    'created_at' => Carbon::now(),
                ]);
            }
*/
        return Redirect('/admin/products/')->with('success', 'Product Added successfully');
    }
       
    public function edit_product($id){
        
        $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();
        $product = Product::findOrFail($id);

        return view('admin.products.edit',compact('product','categories','subcategories'));
    }   

    public function update_product(Request $request, $id){
        $validated = $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'product_name' => 'required|max:555',
            'product_qty' => 'required',
            'selling_price' => 'required',
            'description' => 'required',
            'product_thumbnail' => 'image|mimes:jpg,png,jpeg,webp|max:5048',
        ]);

         

          $product = Product::find($id);
       
          $product->category_id = $validated['category_id'];
          $product->subcategory_id = $validated['subcategory_id'];
          $product->product_name = $validated['product_name'];
          $product->product_qty = $validated['product_qty'];
          $product->product_size = $request->product_size; 
          $product->product_color = $request->product_color; 
          $product->selling_price = $validated['selling_price'];
          $product->description = $validated['description'];
          $product->new_arrivals = $request->new_arrivals;
          $product->featured = $request->featured;
     
  
          
          if ($request->hasFile('product_thumbnail')) {
              $product_thumbnail = $request->file('product_thumbnail');
              $ImageName = time() . '-' . str_replace( " ", "-", $request->product_name ) . '.' . $request->product_thumbnail->extension();
              $request->product_thumbnail->move(public_path('/uploads/products/thumbnails'), $ImageName);
              $product->product_thumbnail = $ImageName;
          }
  
          $product->save();



          return Redirect()->route('view-products')->with('success', 'Product updated successfully');
    }

    public function delete_product($id){
       
        $deleted_products = Product::find($id)->delete();
        return Redirect()->route('view-products')->with('success', 'Product moved to trash successfully');
    }
    
    public function restore_product($id){
        $deleted_products = Product::withTrashed()->find($id)->restore();
        return Redirect()->route('view-products')->with('success', 'Product restored successfully');
    }
    public function p_delete_product($id){
        $deleted_products = Product::withTrashed()->find($id)->forceDelete();
        return Redirect()->route('view-products')->with('success', 'Product permanently deleted successfully');
    }
    
}
