<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'document_branch', 'document_id', 'branch_id');
    }
}
