<?php

class Pacijenti extends Eloquent {

	protected $guarded = [];
	
	protected $table = 'pacijenti';

    protected $primaryKey = 'id';


    public function pacijenti()
    {
        return $this->hasMany('termini','id');
    } 

}