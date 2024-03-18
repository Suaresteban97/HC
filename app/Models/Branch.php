<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function upz()
    {
        return $this->belongsTo(Upz::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function watershed()
    {
        return $this->belongsTo(Watershed::class);
    }

    public function chips()
    {
        return $this->hasMany(Chip::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function hidrico()
    {
        return $this->hasMany(Hidrico::class);
    }

    public function respel()
    {
        return $this->hasMany(Respel::class);
    }

    public function suelo()
    {
        return $this->hasMany(Suelo::class);
    }

    public function pdc()
    {
        return $this->hasMany(Pdc::class);
    }

    public function monitoring()
    {
        return $this->hasMany(Monitoring::class);
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'documents_branches', 'branch_id', 'document_id');
    }
    
}
