<?php
	class profile extends Eloquent{
		protected $table='profile';
		protected $fillable=array('id','fullname','photo','content','user_id');
	}