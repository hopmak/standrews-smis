<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
   protected $primarykey = "id";

    protected $fillable = ['fname', 'sname', 'address', 'phone', 'dob', 'age', 'class'];
    use HasFactory;

}
