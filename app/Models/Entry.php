<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
  protected $fillable=['title','content','user_id','slug'];
  use HasFactory;

    public function user()
    {
      return $this->belongsTo(User::class);
    }


}
