<?php

namespace Ecooperative;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nom
 * @property string $tel
 * @property string $email
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Achat[] $achats
 * @property Assignation[] $assignations
 */
class Acheteur extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nom', 'tel', 'email', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function achats()
    {
        return $this->hasMany('Ecooperative\Achat', 'acheteurs_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assignations()
    {
        return $this->hasMany('Ecooperative\Assignation', 'acheteurs_id');
    }
}
