<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;
    protected $table = 'job_seekers';
    protected $fillable = ['name','lastname','phone','email','coverLatter','resume'];

}
