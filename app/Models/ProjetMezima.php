<?php

namespace App\Models;


use App\Models\TacheMezima;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjetMezima extends Model
{
    protected $fillable=['nomProjet','nomClient','nomZone','nomResponsable','nomService','dureeProjet','statutProjet','nbrTache','nbrTacheFini','description'];
    use HasFactory;
    public function tachemezima():HasMany{
        return $this->hasMany(Tachemezima::class);
    }
}
