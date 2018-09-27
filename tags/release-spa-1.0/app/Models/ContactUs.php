<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model {

	protected $table = "contact_us";
	protected $guarded = ['deleted_at'];
        protected $fillable = ['name', 'phone','remarks', 'email'];
}