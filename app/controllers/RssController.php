<?php

class RssController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $data["posts"] = Post::orderBy('created_at', 'desc')->get(); 
        return Response::view('rss', $data)->header('Content-Type', 'application/atom+xml; charset=UTF-8');
	}

}
