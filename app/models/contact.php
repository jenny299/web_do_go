<?php
	class contact extends Eloquent{
		protected $table='contact';
		protected $fillable=array('id','tencty','diachi','dienthoai','fax','email','maps_latitude','maps_longitude','maps_label','maps_address');
	}