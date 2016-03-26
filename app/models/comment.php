<?php
	class comment extends Eloquent{
		protected $table='comment';
		protected $fillable=array('id','id_sanpham','comment','status','duyet');
	}