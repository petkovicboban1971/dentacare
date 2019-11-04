<?php

class AdminController extends \BaseController {

	public function admin(){
		Session::forget('log_sesija');
		Session::forget('logovan');
		Session::put('jezik', 'lat');
    	return View::make('login');
	}


	function admin_login_store() {

		if (empty(Session::get('log_sesija'))) {
			
	        $username=Input::get('username');
	        $password=Input::get('password');
	        $username=addslashes($username);
	    //  $password=addslashes($password);
	        $password=md5($password);
	            
	            $validator = Validator::make(array('username'=>$username,'password'=>$password),
	            array(
	                'username' => 'required|between:3,40',
	                'password' => 'required|between:3,40|alpha_num|exists:osoblje,lozinka,ime,'.$username
	            ),
	            array(
	                'required' => 'Niste popunili polje!',
	                'between' => 'Broj karaktera mora biti između 3 i 40!',
	                'alpha_num' => 'Polje sme sadržati samo slova i cifre!',
	                'exists' => 'Uneli ste pogrešno korisničko ime ili lozinku!'
	            ));

	            if($validator->fails()){
	                return Redirect::to('/admin')->withInput()->withErrors($validator->messages());
	            }
	            
	            $rola = DB::table('osoblje')->where(array('ime'=>addslashes($username),'lozinka'=>addslashes($password)))->pluck('rola');
	            $osoblje = DB::table('osoblje')->where(array('ime'=>addslashes($username),'lozinka'=>addslashes($password)))->pluck('id');

	                Session::put('log_sesija', $rola);
	                Session::put('logovan', $osoblje);

		}

		return View::make('menu');
    }

}
