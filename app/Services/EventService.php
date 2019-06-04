<?php

namespace Descolado\Services;

use Descolado\Http\Requests\EventRequest;
use Descolado\Interfaces\Repositories\EventRepositoryInterface;

class EventService
{
    /**
     * @var EventRepositoryInterface
     */
    private $repository;

    /**
     * EventService constructor.
     * @param EventRepositoryInterface $repository
     */
    public function __construct(EventRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param EventRequest $request
     * @return mixed
     */
    public function createEvent(EventRequest $request)
    {
        return $this->repository->createEvent($request);
    }

    /**
     * @param EventRequest $request
     * @param int $id
     * @return mixed
     */
    public function updateEvent(EventRequest $request, int $id)
    {
        return $this->repository->updateEvent($request, $id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteEvent(int $id)
    {
        return $this->repository->deleteEvent($id);
    }
}
