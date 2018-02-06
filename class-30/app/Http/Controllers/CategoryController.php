<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
   public function index(){
       return view('admin.category.add-category');
   }
   public  function saveCategoryInfo(Request $request)
   {
       $category = new Category();
       $category->category_name =$request->category_name;
       $category->category_description =$request->category_description;
       $category->publication_status =$request->publication_status;
       $category->save();
//       return 'success';//eloquentORM

       return redirect('/category/add')->with('message','Category Info save successfully');

//       Category::create($request->all());
//       return 'success';//eloquentORM

//query builder

//       DB::table('categories')->insert([
//           'category_name' => $request->category_name,
//           'category_description' => $request->category_description,
//           'publication_status' => $request->publication_status
//       ]);
//       return 'success';
   }

   public function manageCategoryInfo(){
       $categories = Category::paginate(3);
//       $categories = Category::all();
//       return $categories;
       return view('admin.category.manage-category',['categories'=>$categories]);
   }
    public function unpublishedCategoryInfo($id){
      $category =Category::find($id);
//      return $category;

        $category->publication_status = 0;
        $category->save();

        return redirect('/category/manage')->with('message', 'Category info unpublished');
    }
    public function publishedCategoryInfo($id){
        $category =Category::find($id);
//      return $category;

        $category->publication_status = 1;
        $category->save();

        return redirect('/category/manage')->with('message', 'Category info published');
    }

    public function editCategoryInfo($id){
        $category =Category::find($id);
        return view('admin.category.edit-category', ['category'=>$category] );
    }

    public function updateCategoryInfo(Request $request){
        $category =Category::find($request->category_id);

        $category ->category_name = $request->category_name;
        $category->category_description =$request->category_description;
        $category->publication_status =$request->publication_status;
        $category->save();
        return redirect('/category/manage')->with('message', 'Category info updated');
    }
    public function deleteCategoryInfo($id){
        $category =Category::find($id);
        $category->delete();
        return redirect('/category/manage')->with('message', 'Category info delete');
    }
}
