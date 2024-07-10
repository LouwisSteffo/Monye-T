<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    protected $primaryKey = 'pencatatan_id';
    
    protected $fillable = [
        'users_id',
        'nama_kategori'
    ];     

    public function users(): BelongsTo{
        return $this->belongsTo(User::class, 'users_id', 'user_id');
    }

    public function pencatatans(): HasMany{
        return $this->hasMany(Pencatatan::class);
    }
}
