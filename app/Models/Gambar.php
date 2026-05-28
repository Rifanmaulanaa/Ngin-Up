<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;

    protected $table      = 'gambar';
    protected $primaryKey = 'id_gambar';
    public    $timestamps = false; // hanya pakai created_at manual

    protected $fillable = [
        'id_properti',
        'url_gambar',
        'is_primary',
        'urutan',
    ];

    protected $casts = [
        'is_primary' => 'boolean',
    ];

    // ===========================
    // RELASI
    // ===========================

    // N:1 — banyak gambar milik satu properti
    public function properti()
    {
        return $this->belongsTo(Properti::class, 'id_properti', 'id_properti');
    }
}