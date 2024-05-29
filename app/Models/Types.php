<?php

namespace App\Models;

use App\Models\Wines;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Types extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function wines()
    {
        return $this->hasMany(Wines::class, 'type_id');
    }
}
