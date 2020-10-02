<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    //protected $fillable = ['name', 'email', 'status', 'ent'];
    protected $guarded = [];

    protected $attributes = [
        'status' => 0,
    ];

    public function entreprise()
    {
        return $this->belongsTo('App\Models\Entreprise');
    
    }

    public function getStatusAttribute($attributes)
    {
        return $this->getStatusOptions()[$attributes];
    }

    public function getStatusOptions()
    {
        return [
            '0' => 'Inactif',
            '1' => 'Actif',
            '2' => 'En attente'
        ];
    }

}
