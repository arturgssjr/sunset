<?php

namespace Descolado\Repositories;

use Descolado\Http\Requests\SubscribeRequest;
use Descolado\Interfaces\Repositories\SubscribeRepositoryInterface;
use Descolado\Models\Subscribe;

class SubscribeRepository implements SubscribeRepositoryInterface
{
    /**
     * @return Subscribe[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public function getAllSubscribes()
    {
        return Subscribe::paginate(15);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getEventById(int $id)
    {
        return Subscribe::findOrFail($id);
    }

    /**
     * @param SubscribeRequest $request
     * @return mixed
     */
    public function createSubscribe(SubscribeRequest $request)
    {
        // TODO: Implement createEvent() method.
    }

    /**
     * @param SubscribeRequest $request
     * @param int $id
     * @return mixed
     */
    public function updateSubscribe(SubscribeRequest $request, int $id)
    {
        // TODO: Implement updateEvent() method.
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteSubscribe(int $id)
    {
        // TODO: Implement deleteEvent() method.
    }
}
