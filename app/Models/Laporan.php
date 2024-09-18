<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $fillable = ['id','nama','deskripsi','tanggal','foto','bidang_id','user_id'];
    protected $casts = [
        'foto' => 'array',
    ];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
