<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\DeptCls;

class RegUserController extends Controller
{
    public function Regform()
    {
    	return view('from');
    }
    public function Reguser(Request $request)
	{
		//return $request->all();
		$user = new User();
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = $request->pass;
		$user->save();

		$d = new DeptCls();
		$d->user_id = $user->id;
		$d->class_id = $request->class_id;
		$d->dept_id = $request->dept_id;
		$d->save();

		$profile = new Profile();
		$profile->user_id = $user->id;
		$profile->photo = $request->photo;
		$profile->address = $request->address;
		$profile->f_name = $request->fname;
		$profile->save();

		return redirect('/main/rform');
	}
}
