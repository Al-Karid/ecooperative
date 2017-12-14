<?php

namespace Ecooperative;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $acheteurs_id
 * @property int $planteurs_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Acheteur $acheteur
 * @property Planteur $planteur
 */
class Assignation extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['acheteurs_id', 'planteurs_id', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function acheteur()
    {
        return $this->belongsTo('Ecooperative\Acheteur', 'acheteurs_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function planteur()
    {
        return $this->belongsTo('Ecooperative\Planteur', 'planteurs_id');
    }
}
