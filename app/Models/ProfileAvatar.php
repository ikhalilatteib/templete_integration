<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileAvatar extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'avatar'];
}
