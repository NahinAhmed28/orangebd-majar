<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Center extends Model
{
    protected $guarded =['id'];
    use HasFactory;

    public function division(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    public function district(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(District::class);
    }
    public function upazila(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Upazila::class);
    }

    public function association(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Association::class);
    }

    public function admins():HasMany
    {
        return $this->hasMany(Admin::class);
    }

    public function users():HasMany
    {
        return $this->hasMany(User::class);
    }
}
