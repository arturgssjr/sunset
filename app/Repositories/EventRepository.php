<?php

namespace Descolado\Repositories;

use Descolado\Http\Requests\EventRequest;
use Descolado\Models\Event;
use Descolado\Interfaces\Repositories\EventRepositoryInterface;

class EventRepository implements EventRepositoryInterface
{

    /**
     * @return Event[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public function getAllEvents()
    {
        return Event::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getEventById($id)
    {
        return Event::findOrFail($id);
    }

    /**
     * @param EventRequest $request
     * @return bool|mixed
     * @throws \Throwable
     */
    public function createEvent(EventRequest $request)
    {
        $data = $request->except('_token');

        $event = new Event();
        $event->setAttribute('edition', $data['edition']);
        $event->setAttribute('name', $data['name']);
        $event->setAttribute('description', $data['description']);
        $event->setAttribute('event_day', $data['event_day']);
        $event->setAttribute('subscribe_begin', $data['subscribe_begin']);
        $event->setAttribute('subscribe_end', $data['subscribe_end']);

        return $event->saveOrFail();
    }

    /**
     * @param EventRequest $request
     * @param int $id
     * @return bool|mixed
     */
    public function updateEvent(EventRequest $request, int $id)
    {
        $data = $request->except(['_token', '_method']);

        $event = Event::findOrFail($id);

        return $event->update($data);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteEvent(int $id)
    {
        $event = Event::findOrFail($id);

        return $event->delete();
    }
}
