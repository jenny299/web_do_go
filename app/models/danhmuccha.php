<?php
	class danhmuccha extends Eloquent{
		protected $table='danhmuc_cha';
		protected $fillable=array('id','name','name_en','cap','thutu');
	}