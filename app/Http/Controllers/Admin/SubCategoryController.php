<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;


class SubCategoryController extends Controller
{
    public function view_subcategories(){
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $subcategories = SubCategory::latest()->paginate(5);
        $subcategories_trash = SubCategory::onlyTrashed()->latest()->paginate(3);

        return view('admin.subcategories.index',compact('subcategories','subcategories_trash','categories' ));
   }

   public function add_subcategory(Request $request){

    $validated = $request->validate([
        'category_id' => 'required',
        'subcategory_name' => 'required|max:255',
    ]);

        SubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-' , $request->subcategory_name)),
            'created_at' => Carbon::now(),
        ]);
        return Redirect()->back()->with('success', 'Sub Category added successfully');
   }

   public function edit_subcategory($id){
    $categories = Category::orderBy('category_name', 'ASC')->get();
    $subcategory = SubCategory::find($id);
    
    return view('admin.subcategories.edit',compact('subcategory','categories'));

}

public function update_subcategory(Request $request, $id){
    $validated = $request->validate([
        'category_id' => 'required',
        'subcategory_name' => 'required|max:255',
        
        
    ]);
      SubCategory::where('id', $id)->update([
        'category_id' => $request->category_id,
        'subcategory_name' => $request->subcategory_name,
        'subcategory_slug' => strtolower(str_replace(' ', '-' , $request->subcategory_name)),
      ]);
      return Redirect()->route('view-subcategories')->with('success', 'Sub Category updated successfully');
}
public function delete_subcategory($id){
    $deleted_subcategories = SubCategory::find($id)->delete();
    return Redirect()->route('view-subcategories')->with('success', 'Category moved to trash successfully');
}

public function restore_subcategory($id){
    $deleted_subcategories = SubCategory::withTrashed()->find($id)->restore();
    return Redirect()->route('view-subcategories')->with('success', 'Category restored successfully');
}
public function p_delete_subcategory($id){
    $deleted_subcategories = SubCategory::withTrashed()->find($id)->forceDelete();
    return Redirect()->route('view-subcategories')->with('success', 'Category permanently deleted successfully');
}

}
