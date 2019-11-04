<?php

class Istorija extends Eloquent {

	protected $guarded = [];
	
	protected $table = 'istorija';

    protected $primaryKey = 'id';


    public function istorija()
    {
        return $this->hasMany('pacijenti','istorija_id');
    } 

}