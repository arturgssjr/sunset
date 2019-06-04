<?php

namespace Descolado\Interfaces\Repositories;

use Descolado\Http\Requests\SubscribeRequest;

interface SubscribeRepositoryInterface
{

    /**
     * @return mixed
     */
    public function getAllSubscribes();

    /**
     * @param int $id
     * @return mixed
     */
    public function getEventById(int $id);

    /**
     * @param SubscribeRequest $request
     * @return mixed
     */
    public function createSubscribe(SubscribeRequest $request);

    /**
     * @param SubscribeRequest $request
     * @param int $id
     * @return mixed
     */
    public function updateSubscribe(SubscribeRequest $request, int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteSubscribe(int $id);

}
