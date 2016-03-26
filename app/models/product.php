<?php
	class product extends Eloquent{
		protected $table='product';
		protected $fillable=array('id','id_cha','id_con1','id_con2','id_con3','name','name_en','gia','image','mota','mota_en','thongso','thongso_en');
	}