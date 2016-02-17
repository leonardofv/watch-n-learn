<?php

namespace Learn;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function user()
    {
        return $this->belongsTo('Learn\User');
    }

    public function project()
    {
        return $this->belongsTo('Learn\Project');
    }
}
