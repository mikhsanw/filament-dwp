<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opd extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $fillable = ['id','nama','singkatan'];

    public function bidangs()
    {
        return $this->hasMany(Bidang::class);
    }
}
