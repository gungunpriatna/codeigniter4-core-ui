<?php namespace App\Controllers;

class Dashboard extends BaseController
{

	public function index()
	{
		helper(['url']);
		
		return view('backend/dashboard');
	}

	//--------------------------------------------------------------------

}
