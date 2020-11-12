<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }
    public function event()
    {
        return $this->belongsTo('App\Event', 'foreign_key');
    }
    public function micropost()
    {
        return $this->belongsTo('App\Micropost', 'foreign_key');
    }
}
