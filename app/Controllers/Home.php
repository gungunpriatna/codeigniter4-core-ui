<?php namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		helper(['url']);
		
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
