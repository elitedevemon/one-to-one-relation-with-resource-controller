<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  // fillable name, date of birth
  protected $fillable = ['name', 'dob'];


  // create one to one relation with contact table
  public function contact()
  {
    return $this->hasOne(Contact::class);
  }
}