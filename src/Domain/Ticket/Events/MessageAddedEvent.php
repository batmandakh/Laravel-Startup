<?php  namespace Domain\Ticket\Events; 

use Domain\Ticket\Ticket;
use Domain\Ticket\Message;
use Hex\Event\EventInterface;

class MessageAddedEvent implements EventInterface {

    /**
     * @var
     */
    private $ticket;

    /**
     * @var
     */
    private $message;

    public function __construct(Ticket $ticket, Message $message)
    {
        $this->ticket = $ticket;
        $this->message = $message;
    }

    /**
     * Return the event name
     * @return string
     */
    public function name()
    {
        return 'ticket.message.added';
    }
}