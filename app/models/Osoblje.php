<?php

class Osoblje extends Eloquent {

	protected $guarded = [];
	
	protected $table = 'osoblje';

    protected $primaryKey = 'id';


    public function osoblje()
    {
        return $this->hasMany('termini','id');
    } 

}