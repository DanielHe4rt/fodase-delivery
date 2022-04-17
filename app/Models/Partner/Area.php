<?php

namespace App\Models\Partner;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Area extends Model
{
    protected $table = 'partner_areas';

    protected $fillable = [
        'partner_id',
        'lat',
        'long'
    ];


    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }
}
