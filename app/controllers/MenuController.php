<?php

class MenuController extends \BaseController {

	public function zakazani_termini(){

		$data = DB::table('termini')->where('odradjen', '=', 0)
									->orderBy('datum', 'ASC')
									->orderBy('vreme', 'ASC')
									->get();

		if (empty($_GET['str'])) {
			$_GET['str'] = 1;
		}
		return View::make('zakazivanje/svi-termini', array('data' => $data, 'niz' => count($data), 'stranica' => $_GET['str']));
	}

	public function zakazan_termin(){

		$provera = DB::table('termini')->where('datum', date_create($_POST['appointment_date']))
										->where('vreme', $_POST['appointment_time'])
										->get();

		if(!empty($provera)){								
			Session::flash('error', Langauge::lang(63, Session::get('jezik')));
			return Redirect::back();
		}

		$data0 = new Pacijenti;
		$data0->ime = Input::get('appointment_name');
		$data0->jmbg = Input::get('jmbg');
		if (!empty(Input::get('appointment_email'))){
			$data0->email = Input::get('appointment_email');
		}
		$data0->telefon = Input::get('appointment_phone');
		$data0->kreirao = 9999;
		$data0->menjao = 9999;
		$data0->save();

		$data = new Termini;
		if (Termini::orderBy('id', 'desc')->first()->id) {
			$data->id = 1 + Termini::orderBy('id', 'desc')->first()->id;
		}
		else{
			$data->id = 1;
		}
		$data->ime = Input::get('appointment_name');
		$data->jmbg = Input::get('jmbg');
		$data->email = Input::get('appointment_email');
		$data->telefon = Input::get('appointment_phone');
		if (!empty(Input::get('appointment_email'))){
			$data->email = Input::get('appointment_email');
		}
		$data->vreme = Input::get('appointment_time');
		$data->poruka = Input::get('appointment_message');
		$data->termini_id = Pacijenti::orderBy('id', 'desc')->first()->id;
		$data->save();

		Session::flash('message', Langauge::lang(59, Session::get('jezik')));
		return Redirect::back();
	}

	public function potvrda_termina($id){
		
		$data = Termini::find($id);
		$data->potvrda = true;
		$data->potvrdio = intval(Session::get('logovan'));
		$data->potvrdioDatum = date_create(date('d.m.Y. h:m:s'));
		$data->update();

		Session::flash('message', Langauge::lang(60, Session::get('jezik')));
		return Redirect::back();
	}


	public function odradjen($id){

		return View::make('pacijenti/istorija-pacijenta', array('id' => $id));
	}

	public function upis_zuba($id){

		//$data = Istorija::find($_POST['id']);
		$data = new Istorija();
		$data->koordinate = $_POST['zub'];
		$data->pacijent_id = $_POST['pom'];
		$data->save();
		print_r($data);die();
	}

	public function odradjen2($id){
		
		$data = Termini::find($id);
		$data->odradjen = true;
		$data->uneo = intval(Session::get('logovan'));
		$data->uneoDatum = date_create(date('d.m.Y. h:m:s'));
		$data->update();

		Session::flash('message', Langauge::lang(61, Session::get('jezik')));
		return Redirect::back();
	}



	public function istorija(){
		
		$data = DB::table('termini')->orderBy('datum', 'ASC')
									->orderBy('vreme', 'ASC')
									->get();

		if (empty($_GET['str'])) {
			$_GET['str'] = 1;
		}

		return View::make('zakazivanje/istorija', array('data' => $data, 'niz' => count($data), 'stranica' => $_GET['str']));
	}

	public function otkaz_termina($id){
		
		$data = Termini::find(DB::table('termini')->where('termini_id', $id)->pluck('id'));
		$data->otkaz = 1;
		$data->otkazaoDatum = date_create(date('d.m.Y. h:m:s'));
		$data->otkazao = intval(Session::get('logovan'));
		$data->update();

		Session::flash('message', 'Termin otkazan!');
		return Redirect::back();
	}

	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
