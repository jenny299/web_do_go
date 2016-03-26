<?php
	class sale extends Eloquent{
		protected $table='sale';
		protected $fillable=array('id','content','content_en');
	}