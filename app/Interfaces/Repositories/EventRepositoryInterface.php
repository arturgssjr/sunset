<?php

namespace Descolado\Interfaces\Repositories;

use Descolado\Http\Requests\EventRequest;

interface EventRepositoryInterface
{

    /**
     * @return mixed
     */
    public function getAllEvents();

    /**
     * @param int $id
     * @return mixed
     */
    public function getEventById(int $id);

    /**
     * @param EventRequest $request
     * @return mixed
     */
    public function createEvent(EventRequest $request);

    /**
     * @param EventRequest $request
     * @param int $id
     * @return mixed
     */
    public function updateEvent(EventRequest $request, int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteEvent(int $id);

}
