<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'course_desc', 'user_id'];
    protected $timestamp = true;

    public function user(){
        return $this->belongsTo(User::clas);
    }
}
