<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $table= "certificates";

    protected $fillable= ['student_name', 'student_code', 'course_name', 'course_date'];
}
