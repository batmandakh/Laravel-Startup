<?php  namespace Domain\Ticket;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

    protected $table = 'messages';

    public function ticket()
    {
        return $this->belongsTo('Domain\Ticket\Ticket');
    }

    public function __toString()
    {
        return $this->message;
    }
} 