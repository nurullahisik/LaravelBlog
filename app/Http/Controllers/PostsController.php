<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Categories;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
	public function posts(Request $request){
		$posts = Post::all();
		return view('/admin/postlist',['posts'=>$posts]);
	}

	public function edit($id = -1){

		$title = "";
		$permalink = "";
		$content = "";
		$selected_category = "";

		$categories = Categories::all();
		if($id != -1){// new post
			$post = Post::find($id);
			$category = Categories::find($post->categori_id);
			$title = $post->title;
			$permalink = $post->permalink;
			$content = $post->content;
			$category = $post->categori_id;
			$selected_category = $post->categori_id;
		}

		return view('admin.postedit',[
			'categories'=>$categories,
			'title'=>$title,
			'content'=>$content,
			'permalink'=>$permalink,
			'id'=>$id,
			'selected_category'=>$selected_category
		]);
	}

	public function save(Request $request){
		$this->validate($request, [
			'title' => 'required|max:255',
			'permalink' => 'required|max:255',
			'content' => 'required'
		]);

		if($request->id != -1){
			$post = Post::find($request->id);
		}else{
			$post = new Post();
		}
		$post->permalink = $request->permalink;
		$post->title = $request->title;
		$post->content = $request->content;
		$post->categori_id = $request->kategori;
		$post->user_id = Auth::user()->id;
		$post->save();
		return redirect('kanepe/posts/');
	}

	public function postView($id = -1){

	}

	public function delete(Post $post){
		$post->delete();
		return redirect('/kanepe/posts');
	}
}
