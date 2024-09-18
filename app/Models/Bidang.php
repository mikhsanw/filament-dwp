<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bidang extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $fillable = ['id','nama','singkatan','opd_id'];

    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }
}
