<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Http\Requests;
use Image;
use File;
use View;
use App\siteSetting;
use App\Models\location;
use App\Models\State;
use App\Models\City;
use App\Models\Pages;
use App\Models\Banner;


class BannerController extends Controller
{
	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		header("Content-Type: application/vnd.ms-excel");
       header("Content-disposition: attachment; filename=products.xls");
 		
	}
	
	
}
