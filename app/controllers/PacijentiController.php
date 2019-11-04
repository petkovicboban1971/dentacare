<?php

class PacijentiController extends \BaseController {

	public function pacijenti(){
		
		$data = DB::table('pacijenti')->where('aktivan', '=', 1)
									  ->orderBy('ime', 'ASC')
									  ->get();

		if (empty($_GET['str'])) {
			$_GET['str'] = 1;
		}


		return View::make('pacijenti/pacijenti', array('data' => $data, 'stranica' => $_GET['str'], 'niz' => count($data)));
	}

	public function novi_pacijent(){
		
		$data0 = DB::table('pacijenti')->where('ime', Input::get('ime'))
									   ->where('jmbg', Input::get('jmbg'))
									   ->get();
		if (!empty($data0)) {
			Session::flash('message', 'Pacijent je već evidentiran u bazi!');
			return View::make('pacijenti/pacijenti', array('data' => DB::table('pacijenti')->get(), 'stranica' => 1, 'niz' => count(DB::table('pacijenti')->where('aktivan', '=', 1)
									  ->orderBy('ime', 'ASC')
									  ->get())));
		}

		$data = new Pacijenti;

		$data->ime = Input::get('ime');
		$data->jmbg = Input::get('jmbg');
		if(!empty(Input::get('email'))){
			$data->email = Input::get('email');
		}
		if(!empty(Input::get('adresa'))){
			$data->adresa = Input::get('adresa');
		}
		if(!empty(Input::get('telefon'))){
			$data->telefon = Input::get('telefon');
		}
			$data->kreirao = Session::get('logovan');
			$data->menjao = Session::get('logovan');
		
		$data->save();

		Session::flash('update', 'Pacijent je uspešno upisan u bazu!');
		return Redirect::to('/pacijenti');
	}

	public function azuriranje_pacijenta($id, $str){
		
		$data = Pacijenti::find($id);
		return View::make('pacijenti/pacijenti', array('data1' => $data, 'stranica' => $str));
	}

	public function istorija_pacijenta($id){
		$data = DB::table('termini')->where('termini_id', $id)->first();
//print_r($data);die();
		return View::make('pacijenti/istorija-pacijenta', array('data' => $data, 'id' => $id));
	}

	public function azurirani_pacijent(){
		
		$data = Pacijenti::find($_POST['id']);

		if(!empty(Input::get('ime'))){
			$data->ime = Input::get('ime');
		}
		if(!empty(Input::get('jmbg'))){
		$data->jmbg = Input::get('jmbg');
		}
		if(!empty(Input::get('email'))){
			$data->email = Input::get('email');
		}
		if(!empty(Input::get('telefon'))){
			$data->telefon = Input::get('telefon');
		}
		if(!empty(Input::get('adresa'))){
			$data->adresa = Input::get('adresa');
		}
		$data->menjao = Session::get('logovan');

		$data->update();

		$data = DB::table('pacijenti')->orderBy('ime', 'ASC')
									  ->where('aktivan', 1)
									  ->get();
		
		Session::flash('update', 'Podaci o pacijentu uspešno ažurirani!');
		return View::make('pacijenti/pacijenti', array('data' => $data, 'stranica' => $_POST['str'], 'niz' => count($data)));
	}


	public function test(){
		
		$data = DB::table('termini')->get();
		//print_r($data);die();
		foreach ($data as $value) {

			$data1 = new Pacijenti;
			$data1->ime = $value->ime;
			$data1->jmbg = $value->jmbg;
			$data1->email = $value->email;
			$data1->telefon = $value->telefon;
			$data1->created_at = $value->created_at;
			$data1->updated_at = $value->updated_at;
			$data1->save();
		}
	}

	public function brisanje_pacijenta($id, $str){
		
		$data = Pacijenti::find($id);
		$data->aktivan = 0;
		$data->update();

		Session::flash('message', 'Brisanje izvršeno!');

		return Redirect::to('/pacijenti');
	}


}
