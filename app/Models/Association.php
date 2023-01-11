<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Association extends Model
{
    protected $guarded =['id'];
    use HasFactory;

    public function centers():HasMany
    {
        return $this->hasMany(Center::class);
    }
}
