<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class dashboard extends BaseController
{
	public function index()
	{
		return view('admin/dashboard_view');
	}

	//--------------------------------------------------------------------

}
