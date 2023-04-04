<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $fillable = [
        'label',
        'link'
    ];

    public function induk()
    {
        return $this->belongsTo(self::class);
    }

    public function subs()
    {
        return $this->hasMany(self::class, 'induk_id');
    }
}
