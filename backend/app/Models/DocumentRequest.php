<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentRequest extends Model
{
    protected $fillable = [
        'student_name',
        'document_type',
        'purpose',
        'status',
    ];
}
