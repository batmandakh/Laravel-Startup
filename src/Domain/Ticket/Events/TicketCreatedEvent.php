<?php  namespace Domain\Ticket\Events;

use Domain\Ticket\Ticket;
use Hex\Event\EventInterface;

class TicketCreatedEvent implements EventInterface {

    /**
     * @var Domain\Ticket\Ticket
     */
    private $ticket;

    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Return the event name
     * @return string
     */
    public function name()
    {
        return 'ticket.created';
    }
}