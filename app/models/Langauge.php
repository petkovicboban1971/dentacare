<?php 
	class Langauge {

		public static function lang($id, $lang){
    			return DB::table('jezici')->where('id', $id)->pluck($lang);
    	
    	}

    	public static function chooseLanguage($jezik){
			Session::forget('jezik');
			return Session::put('jezik', $jezik);
			
		}
    }
?>