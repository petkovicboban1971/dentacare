<?php
 
////////////////////////  ADMIN  ////////////////////////////

Route::get('/admin', 'AdminController@admin');
Route::post('/admin-login-store', 'AdminController@admin_login_store');

Route::get('/menu', function(){ return View::make('menu');});/*
Route::get('/menu1', 'PacijentiController@test');
Route::get('/menu2', 'PacijentiController@test2');*/

Route::get('/zakazani-termini', 'MenuController@zakazani_termini');
Route::post('/zakazan-termin', 'MenuController@zakazan_termin');
Route::post('/upis-zuba/{id}', 'MenuController@upis_zuba');
Route::get('/odradjen/{id}', 'MenuController@odradjen');
Route::get('/istorija', 'MenuController@istorija');
Route::get('/otkaz-termina/{id}', 'MenuController@otkaz_termina');
Route::get('/potvrda-termina/{id}', 'MenuController@potvrda_termina');

Route::get('/pacijenti', 'PacijentiController@pacijenti');
Route::get('/istorija-pacijenta/{id}', 'PacijentiController@istorija_pacijenta');
Route::get('/brisanje-pacijenta/{id}/{str}', 'PacijentiController@brisanje_pacijenta');
Route::get('/azuriranjePacijenta/{id}/{str}', 'PacijentiController@azuriranje_pacijenta');
Route::post('/novi-pacijent', 'PacijentiController@novi_pacijent');
Route::post('/azurirani-pacijent', 'PacijentiController@azurirani_pacijent');


////////////////////////  LIVE  ////////////////////////////

Route::get('/', 'HomeController@index');
Route::get('/index', 'HomeController@index');
Route::get('/index1', 'HomeController@index1');

Route::get('/o-nama', 'HomeController@o_nama');
Route::get('/usluge', 'HomeController@usluge');
Route::get('/blog', 'HomeController@blog');
Route::get('/kontakt', 'HomeController@kontakt');
Route::get('/doktori', 'HomeController@doktori');/*
Route::get('/zakazan-termin', 'HomeController@zakazan_termin');*/