<?php
	class dmcon3 extends Eloquent{
		protected $table='danhmuc_con3';
		protected $fillable=array('id','id_dmcon2','name','name_en','cap','thutu');
	}