<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Partner extends Model
{
    protected $table = 'partners';

    protected $fillable = [
        'trading_name',
        'owner_name',
        'document_number',
    ];

    public function areas(): HasMany
    {
        return $this->hasMany(Area::class);
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }
}
