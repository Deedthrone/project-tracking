<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // RETURN
    public function printId($a) {
    	return $a;
    }
    public function printNama($b) {
    	return $b;
    }
    public function printSubject($c) {
    	return $c;
    }

    public function printMessage($d) {
    	return $d;
    }




    // SCHEMA
    
    public function category()
    {
        return $this->belongsTo(Type::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
