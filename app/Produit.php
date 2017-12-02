<?php

namespace Ecooperative;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $libelle
 * @property int $prixu
 * @property Achat[] $achats
 */
class Produit extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libelle', 'prixu'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function achats()
    {
        return $this->hasMany('Ecooperative\Achat', 'produits_id');
    }
}
