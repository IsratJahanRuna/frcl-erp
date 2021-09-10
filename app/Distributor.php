<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Devfaysal\BangladeshGeocode\Models\Upazila;
use Devfaysal\BangladeshGeocode\Models\District;
use Devfaysal\BangladeshGeocode\Models\Division;

class Distributor extends Model
{
    protected $fillable = ['distributor_name' ,
    'proprietor_name' ,
    'fat_hus_name' ,
    'proprietor_present_address' ,
    'proprietor_present_PO' ,
    'proprietor_present_thana' ,
    'proprietor_present_district' ,
    'proprietor_permanent_address' ,
    'proprietor_permanent_PO' ,
    'proprietor_permanent_thana' ,
    'proprietor_permanent_district',
    'telephone_office' ,
    'telephone_house' ,
    'mobile' ,
    'mobileALT' ,
    'fax' ,
    'zone' ,
    'division' ,
    'base' ,
    'image_distributot' ,
    'image_nominee' ,
    'image_trade' ,
    'image_nid' ,
    'image_form' ,
    'random_number' ,
    'comment',
    'distributor_payment',
    'total_money'];

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function paymentDistributor()
    {
        return $this->belongsTo(Payment::class)->withDefault();
    }

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function bases(){
        return $this->belongsTo(Upazila::class, 'base', 'id');
    }

    public function zones(){
        return $this->belongsTo(district::class, 'zone', 'id');
    }
    public function divisions(){
        return $this->belongsTo(Division::class, 'division', 'id');
    }


}
