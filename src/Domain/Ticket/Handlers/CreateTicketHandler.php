<?php  namespace Domain\Ticket\Handlers;

use Hex\Event\Dispatcher;
use Domain\Ticket\Ticket;
use Domain\Ticket\Category;
use Domain\Ticket\Message;
use Domain\Staff\Staffer;
use Domain\Ticket\TicketRepositoryInterface;
use Domain\Ticket\Validators\CreateTicketValidator;
use Hex\CommandBus\HandlerInterface;
use Hex\CommandBus\CommandInterface;

class CreateTicketHandler implements HandlerInterface {

    /**
     * @var \Hex\Tickets\Validators\CreateTicketValidator
     */
    private $validator;

    /**
     * @var \Hex\Tickets\TicketRepositoryInterface
     */
    private $repository;

    /**
     * @var \Hex\Events\Dispatcher
     */
    private $dispatcher;

    public function __construct(CreateTicketValidator $validator, TicketRepositoryInterface $repository, Dispatcher $dispatcher)
    {
        $this->validator = $validator;
        $this->repository = $repository;
        $this->dispatcher = $dispatcher;
    }

    public function handle(CommandInterface $command)
    {
        $this->validate($command);
        $this->save($command);
    }

    protected function validate($command)
    {
        $this->validator->validate($command);
    }

    protected function save($command)
    {
        $message = new Message;
        $message->message = $command->message;

        $ticket = new Ticket;
        $ticket->subject = $command->subject;
        $ticket->name = $command->name;
        $ticket->email = $command->email;
        $ticket->setCategory( Category::find($command->category_id) ); // Need repo
        $ticket->setStaffer( Staffer::find($command->staffer_id) );    // Need repo
        $ticket->addMessage( $message );

        $this->repository->save($ticket);

        $this->dispatcher->dispatch( $ticket->flushEvents() );
    }
} 