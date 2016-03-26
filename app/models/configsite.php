<?php
	class configsite extends Eloquent{
		protected $table='config';
		protected $fillable=array('id','maunen','anhnen','chon','email');
	}