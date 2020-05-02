<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ?  $this->image : 'profile/62EujYUj3F9JiKXtI9R6mxLm0HeCvcRDUkJEecQ9.jpeg';
        return '/storage/' . $imagePath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
