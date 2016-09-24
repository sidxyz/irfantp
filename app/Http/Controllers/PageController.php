<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
public function index()
{
	$pagetype="index";
	return view('pages.index')->with(['pagetype'=>$pagetype]);
}

public function short()
{
	$pagetype="short";
	return view('pages.short-codes')->with(['pagetype'=>$pagetype]);
}

public function portfolio()
{
	$pagetype="portfolio";
	return view('pages.portfolio')->with(['pagetype'=>$pagetype]);
}

public function mail()
{
	$pagetype="mail";
	return view('pages.index')->with(['pagetype'=>$pagetype]);
}

public function single()
{
	$pagetype="single";
	return view('pages.single')->with(['pagetype'=>$pagetype]);
}
public function services()
{
	$pagetype="services";
	return view('pages.services')->with(['pagetype'=>$pagetype]);
}

public function contact()
{
	return view('pages.contact-form');
}

}