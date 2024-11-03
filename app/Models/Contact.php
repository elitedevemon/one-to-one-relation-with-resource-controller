<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  // fillable email, phone, address
  protected $fillable = ['email', 'phone', 'address'];
}