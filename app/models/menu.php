<?php
	class menu extends Eloquent{
		protected $table='menu';
		protected $fillable=array('id','title','title_en');
	}