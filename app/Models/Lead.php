<?php

// app/Models/Lead.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $primaryKey = 'lead_id';

    protected $fillable = ['name', 'email', 'ref_id'];
}

