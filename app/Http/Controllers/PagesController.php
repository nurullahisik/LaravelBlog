<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Page;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	//
	public function index(Request $request, $sayfa = 1){
		$pages = Page::all();

		return view('admin.pagelist', ['pages' => $pages]);
	}

	public function edit(Request $request, $pageid = -1){
		$title = "";
		$permalink = "";
		$content = "";
		if($pageid != -1){
			$page = Page::find($pageid);
			$title = $page->title;
			$permalink = $page->permalink;
			$content = $page->content;
		}
		return view('admin.pageedit', [
			'id' => $pageid,
			'title' => $title,
			'permalink' => $permalink,
			'content' => $content
		]);
	}

	public function save(Request $request){
		$this->validate($request, [
			'title' => 'required|max:255',
			'permalink' => 'required|max:255',
			'content' => 'required'
		]);
		if($request->id == -1){
			$page = new Page();
		} else {
			$page = Page::find($request->id);
		}
		$page->title = $request->title;
		$page->content = $request->content;
		$page->permalink = $request->permalink;
		$page->user_id = Auth::user()->id;
		$page->save();
		return redirect("/kanepe/pages/");
	}

	public function delete($id = -1){
		$page = Page::find($id);
		$page->delete();
		return redirect('/kanepe/pages');
	}
}
