<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Shop extends BaseController
{
	public function index()
	{
		$data['name'] = "Hugo Zorrilla";
		return view('hola-mundo',$data);
	}



	//--------------------------------------------------------------------

}
