<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.master';

	public function index()
	{

		$stories = Story::all();

		$this->layout->content = View::make('home')
		                      -> with('stories', $stories);
	}

}