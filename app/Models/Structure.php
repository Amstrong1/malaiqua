<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Structure extends Model
{
    use HasFactory, SoftDeletes;

    protected $append = [
        'formated_date'
    ];

    public function getFormatedDateAttribute(){
        return getFormattedDate($this->created_at);
    }

    public function rooms() : HasMany {
        return $this->hasMany(Room::class);
    }

    public function equipments() : HasMany {
        return $this->hasMany(Room::class);
    }

    public function reservations() : HasMany {
        return $this->hasMany(Reservation::class);
    }

    public function conditions() : HasMany {
        return $this->hasMany(Condition::class);
    }

}
