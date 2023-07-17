<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function store(Request $request){

		$request->validate([
			'name'=>'required|min:3']);


		return 'procesado';
	}
    //
}
