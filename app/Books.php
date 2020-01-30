<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Books extends Model
{
    protected $table = 'books';
    public function users()
    {
        return $this->belongsTo('User');
    }

}
