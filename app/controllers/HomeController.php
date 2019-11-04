<?php

class HomeController extends BaseController {


	public function index(){
			
		if(empty(Session::get('jezik'))){

			Session::put('jezik', 'lat');
		}	

		if (empty($_GET['jezik'])) {

			return View::make('index', array('stranica' => 1));
		}

		if (!empty($_GET['jezik'])) {

			Langauge::chooseLanguage($_GET['jezik']);
		}
		return Redirect::back();	
	}

	public function index1(){

		if(empty(Session::get('jezik'))){

			Session::put('jezik', 'lat');
		}
		return View::make('index');
	}

	public function o_nama(){

		if (!isset($_GET['stranica'])) {
			$_GET['stranica'] = 2;
		}
		return View::make('o-nama', array('stranica' => $_GET['stranica']));
	}

	public function usluge(){

		if (!isset($_GET['stranica'])) {
			$_GET['stranica'] = 3;
		}
		return View::make('usluge', array('stranica' => $_GET['stranica']));
	}

	public function blog(){

		if (!isset($_GET['stranica'])) {
			$_GET['stranica'] = 6;
		}
		return View::make('blog', array('stranica' => $_GET['stranica']));
	}

	public function doktori(){

		if (!isset($_GET['stranica'])) {
			$_GET['stranica'] = 4;
		}
		return View::make('doktori', array('stranica' => $_GET['stranica']));
	}

	public function kontakt(){

		if (!isset($_GET['stranica'])) {
			$_GET['stranica'] = 5;
		}
		return View::make('kontakt', array('stranica' => $_GET['stranica']));
	}

}
