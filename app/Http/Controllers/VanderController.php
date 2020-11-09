<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vander;
use App\Produce;
class VanderController extends Controller
{
    public function vanderinfo()
    {
    	return view('vander');
    }
    public function vanderstore(Request $request)
    {
    	$van = new Vander();
		$van->name = $request->name;
		$van->company = $request->company;
		$van->phone = $request->phone;
		$van->address = $request->address;
		$van->email = $request->email;
		$van->save();

		$v = new Produce();
		$v->vander_id = $van->id;
		$v->name = $request->name;
		$v->brand = $request->brand;
		$v->cp = $request->costprice;
		$v->sp = $request->sellingprice;
		$v->save();
		return redirect()->back();
}
}
