<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $primaryKey = 'kategori_id';

    public function pencatatans()
    {
        return $this->hasMany(Pencatatan::class);
    }
}
