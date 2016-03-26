<?php
	class dmcon2 extends Eloquent{
		protected $table='danhmuc_con2';
		protected $fillable=array('id','id_dmcon1','name','name_en','cap','thutu');
	}