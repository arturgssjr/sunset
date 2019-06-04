<?php

namespace Descolado\Http\Controllers;

use Descolado\Http\Controllers\Controller;
use Descolado\Http\Requests\EventRequest;
use Descolado\Services\EventService;
use Descolado\Interfaces\Repositories\EventRepositoryInterface;

class EventController extends Controller
{

    /**
     * @var EventRepositoryInterface
     */
    protected $repository = null;
    /**
     * @var EventService
     */
    private $service = null;

    /**
     * EventController constructor.
     * @param EventRepositoryInterface $repository
     * @param EventService $service
     */
    public function __construct(EventRepositoryInterface $repository, EventService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $events = $this->repository->getAllEvents();

        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }


    /**
     * @param EventRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EventRequest $request)
    {
        try {
            $this->service->createEvent($request);
        } catch (\Exception $e) {
            throw new $e->getMessage();
        }

        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = $this->repository->getEventById($id);

        return view('admin.event.list', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $event = $this->repository->getEventById($id);

        return view('admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EventRequest $request
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(EventRequest $request, $id)
    {
        try {
            $this->service->updateEvent($request, $id);
        } catch (\Exception $e) {
            throw new $e->getMessage();
        }

        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $this->service->deleteEvent($id);
        } catch (\Exception $e) {
            throw new $e->getMessage();
        }

        return redirect()->route('event.index');
    }
}
