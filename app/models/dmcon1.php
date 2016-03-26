<?php
	class dmcon1 extends Eloquent{
		protected $table='danhmuc_con1';
		protected $fillable=array('id','id_dmcha','name','name_en','cap','thutu');
	}