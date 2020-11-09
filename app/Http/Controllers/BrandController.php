<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Brand;
use App\Supply;

class BrandController extends Controller
{
    public function brandinfo()
    {
    	return view('Brandview');
    }
    public function brandstore(Request $request)
    {
    	$pro = new Products();

		$pro->dresses = $request->dresses;
		$pro->handbags = $request->handbags;
		$pro->shoes = $request->shoes;
		$pro->rings = $request->rings;
		$pro->save();

		$b = new Brand();
		$b->user_id = $pro->id;
		$b->logo = $request->logo;
		$b->password = $request->password;
		$b->name = $request->name;
		$b->email = $request->email;
		$b->save();

		$s = new Supply();
		$s->user_id = $pro->id;
		$s->address = $request->address;
		$s->ownername = $request->ownername;
		$s->save();
		return redirect()->back();
    }

}
