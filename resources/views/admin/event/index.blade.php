@extends('layouts.app')

@section('content')
<div class="container">
    @includeIf('layouts._confirmation-modal')
    <a class="btn btn-sm btn-success mb-1" data-toggle="tooltip" data-placement="top" title="Cadastrar novo evento"
        role="button" href="{{ route('event.create') }}">
        <i class="fas fa-plus-circle"></i>
        Cadastrar novo evento
    </a>
    @if($events->count() > 0)
    <table class="table table-striped table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Evento</th>
                <th scope="col" class="text-center">Data</th>
                <th scope="col" class="text-center">Quantidade de Inscritos</th>
                <th scope="col" class="text-center">Período de Inscrição</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <th scope="row" class="text-center">{{ $event->id }}</th>
                <td class="text-center">{{ eventName($event->edition, $event->name) }}</td>
                <td class="text-center">{{ formatDate($event->event_day) }}</td>
                <td class="text-center">{{ $event->subscribes->count() }}</td>
                <td class="text-center">{{ formatDate($event->subscribe_begin) }} à
                    {{ formatDate($event->subscribe_end) }}</td>
                <td class="text-center">
                    <a href="{{ route('event.show', $event->id) }}" class="btn btn-sm btn-info"
                        title="Visualizar evento" data-toggle="tooltip" data-placement="top" role="button">
                        <i class="fa fa-info-circle"></i>
                    </a>
                    <a href="{{ route('event.edit', $event->id) }}" class="btn btn-sm btn-warning"
                        title="Alterar evento" data-toggle="tooltip" data-placement="top" role="button">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <button class="btn btn-sm btn-danger load-confirmation-modal" data-toggle="tooltip"
                        data-placement="top" title="Excluir evento" role="button"
                        data-url="{{ route('event.destroy', $event->id) }}" data-type="Evento"
                        data-name="{{ eventName($event->edition, $event->name) }}" data-target="#confirmation-modal"
                        data-toggle="modal">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info text-center">Nenhum evento cadastrado.</div>
    @endif
</div>
@endsection
