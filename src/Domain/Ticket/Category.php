<?php  namespace Domain\Ticket;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    public function staff()
    {
        return $this->belongsToMany('Domain\Staff\Staffer');
    }

    public function tickets()
    {
        return $this->hasMany('Domain\Staff\Ticket');
    }

    public function __toString()
    {
        return $this->category;
    }
} 