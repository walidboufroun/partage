<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Autorisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_auto',
        'id_user',
        'id_dep',
        'part'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'id_dep');
    }
}
