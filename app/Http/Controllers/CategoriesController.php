<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Categories;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
	public function categories($id = -1){
		$categories = Categories::all();

		$name = "";
		if($id != -1){
			$category = Categories::find($id);
			$name = $category->name;
		}

		return view('admin.categorylist',[
			'categories'=>$categories,
			'categoryid'=>$id,
			'categoryname'=>$name]);
	}

	public function save(Request $request){
		$this->validate($request,['name'=>'required|max:20']);
		if($request->categoryid == -1){
			$category = new Categories();
		}else{
			$category = Categories::find($request->categoryid);
		}

		$category->name = $request->name;
		$category->save();
		return redirect('/kanepe/categories');
	}

	public function delete(Request $request){
		$category = Categories::find($request->id);
		$category->delete();
		return redirect('/kanepe/categories');
	}

}
