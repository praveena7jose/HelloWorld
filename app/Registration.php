<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'Slno';
    protected $table = 'FormSubmition';
    protected $fillable = array(
		'StaffID', 
		'Date', 
		'Name', 
		'Department', 
		'Designation', 
		'WindowsOperatingSystem', 
		'OtherOperatingSystem', 
		'Mac_MACAddress',
		'IPad _MACAddress', 
		'Android_MAC Address'
    );

    public $timestamps = false;
}
