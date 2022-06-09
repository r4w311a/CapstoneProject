<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function view_categories(){
        $categories = Category::latest()->paginate(5);
        $categories_trash = Category::onlyTrashed()->latest()->paginate(3);

        return view('admin.categories.index',compact('categories','categories_trash' ));
   }

   public function add_category(Request $request){

    $validated = $request->validate([
        'category_name' => 'required|unique:categories|max:255',
        'category_icon' => 'required|max:255',
    ]);

        Category::insert([
            'category_name' => $request->category_name,
            'category_icon' => $request->category_icon,
            'category_slug' => strtolower(str_replace(' ', '-' , $request->category_name)),
            'created_at' => Carbon::now(),
        ]);
        return Redirect()->back()->with('success', 'Category added successfully');
   }

   public function edit_category($id){
       
    $category = Category::find($id);
    return view('admin.categories.edit',compact('category'));

}

public function update_category(Request $request, $id){
    $validated = $request->validate([
          'category_name' => 'required|unique:categories|max:255',
          'category_icon' => 'required|max:255'
    ]);
      Category::where('id', $id)->update([
          'category_name' => $request->category_name,
          'category_icon' => $request->category_icon,
      ]);
      return Redirect()->route('view-categories')->with('success', 'Category updated successfully');
}
public function delete_category($id){
    $deleted_categories = Category::find($id)->delete();
    return Redirect()->route('view-categories')->with('success', 'Category moved to trash successfully');
}

public function restore_category($id){
    $deleted_categories = Category::withTrashed()->find($id)->restore();
    return Redirect()->route('view-categories')->with('success', 'Category restored successfully');
}
public function p_delete_category($id){
    $deleted_categories = Category::withTrashed()->find($id)->forceDelete();
    return Redirect()->route('view-categories')->with('success', 'Category permanently deleted successfully');
}
}
