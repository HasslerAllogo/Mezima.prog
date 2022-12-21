<?php

namespace App\Models;

use App\Models\ProjetMezima;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TacheMezima extends Model
{
    protected $fillable=['nomTache','dureeTache','statutTache','tacheAnt','projet_mezima_id'];
    use HasFactory;
    public function projetMezima():BelongsTo
    {
        return $this->belongsTo(ProjetMezima::class);
    }
}
