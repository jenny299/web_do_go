<?php
	class service extends Eloquent{
		protected $table='service';
		protected $fillable=array('id','content','content_en');
	}