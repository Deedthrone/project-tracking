<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function inboxs()
    {
        return $this->hasMany(Inbox::class);
    }

    protected $guarded = ['id'];
}
