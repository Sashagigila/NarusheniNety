<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function reports(): HasMany
    {
        return $this->HasMany(Report::class);
    }
}
