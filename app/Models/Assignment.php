<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    
    public function complete()
    {
        $this->completed_at= true; //set current column to true
        $this->save();
    }
}
