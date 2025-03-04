<?php

namespace App\Models;

use App\Models\User;
use App\Models\Wines;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrowsingHistories extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'wine_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wine()
    {
        return $this->belongsTo(Wines::class, 'wine_id');
    }
}
