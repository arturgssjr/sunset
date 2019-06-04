<?php

namespace Descolado\Http\Controllers;

use Descolado\Http\Controllers\Controller;
use Descolado\Http\Requests\SubscribeRequest;
use Descolado\Interfaces\Repositories\SubscribeRepositoryInterface;

class SubscribeController extends Controller
{

    /**
     * @var SubscribeRepositoryInterface
     */
    private $repository;

    /**
     * SubscribeController constructor.
     * @param SubscribeRepositoryInterface $repository
     */
    public function __construct(SubscribeRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribes = $this->repository->getAllSubscribes();

        return view('admin.subscribe.index', compact('subscribes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subscribe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SubscribeRequest $request
     * @return void
     */
    public function store(SubscribeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subscribe = $this->repository->getEventById($id);

        return view('admin.subscribe.list', compact('subscribe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SubscribeRequest $request
     * @param  int $id
     * @return void
     */
    public function update(SubscribeRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
