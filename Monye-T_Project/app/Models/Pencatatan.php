<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pencatatan extends Model
{
    use HasFactory;

    protected $primaryKey = 'pencatatan_id';
    
    protected $fillable = [
        'users_id',
        'kategoris_id',
        'dompets_id',
        'status',
        'jumlah',
        'deskripsi', //nullable
        'bukti', //nullable
        'tanggal'
    ];     

    public function users(): BelongsTo{
        return $this->belongsTo(User::class, 'users_id', 'user_id');
    }
    
    public function kategoris(): BelongsTo{
        return $this->belongsTo(Kategori::class, 'kategoris_id', 'kategori_id');
    }
    
    public function dompets(): BelongsTo{
        return $this->belongsTo(Dompet::class, 'dompets_id', 'dompet_id');
    }
        
}
