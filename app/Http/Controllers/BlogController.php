<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Post;
use App\Categories;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
	private $limit = 10;
	public function index($sayfa = 1){

		$toplamSayfa = Post::count();
		$lastPage = ceil($toplamSayfa/$this->limit);
		if($sayfa > $lastPage){
			$sayfa = $lastPage;
		}
		if($sayfa < 1){
			$sayfa = 1;
		}

		$posts = Post::skip($this->limit*($sayfa-1))->orderBy('id','desc')->take($this->limit)->get();

		return view('blog.index', [
		'posts' => $posts,
		'toplamSayfa' =>$toplamSayfa,
		'currentPage' => $sayfa,
		'lastPage' => $lastPage]);
	}

	public function pageView($permalink){
		$pageView = Page::where('permalink', $permalink)->firstOrFail();
		$posts = Post::all();

		return view('blog.pageView',['pageView'=>$pageView,'posts' => $posts]);

	}

	public function postView($permalink){
		$postView = Post::where('permalink', $permalink)->firstOrFail();
		$posts = Post::all();

		return view('blog.postView',['postView'=>$postView,'posts' => $posts]);

	}

	public function categoryPosts($categoryName){
		$categoryID = Categories::where('name',$categoryName)->firstOrFail();

		$posts = Post::where('categori_id',$categoryID->id)->orderBy('id','desc')->get();

		return view('blog.index', [
		'posts' => $posts,
		'toplamSayfa' =>0,
		'currentPage' => 0,
		'lastPage' => 0]);
	}

}
