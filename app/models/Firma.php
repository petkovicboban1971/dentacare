<?php	
	class Firma extends Eloquent {

    protected $guarded = [];
	
	protected $table = 'firma';

    protected $primaryKey = 'firma_id';

    
    public static function naziv(){

        $result = DB::table('firma')->where('firma_id', 1)->pluck('naziv');
        return $result;
    }

    public static function adresa(){

        $result = DB::table('firma')->where('firma_id', 1)->pluck('adresa');
        return $result;
    }

}