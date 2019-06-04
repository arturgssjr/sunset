    @extends('layouts.app')

@section('content')
    <div class="container">
        <a class="btn btn-sm btn-info mb-1" data-toggle="tooltip" data-placement="top" title="Voltar" role="button"
           href="{{ route('subscribe.index') }}">
            <i class="fas fa-arrow-left"></i>
            Voltar
        </a>
        <table class="table table-sm">
            <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Nome</th>
                <th scope="col" class="text-center">E-mail</th>
                <th scope="col" class="text-center">Telefone</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" class="text-center">{{ $subscribe->id }}</th>
                <td class="text-center">{{ $subscribe->name }}</td>
                <td class="text-center">{{ $subscribe->email }}</td>
                <td class="text-center">{{ formatMobileNumber($subscribe->phone) }}</td>
                <td class="text-center">
                    <a href="#" class="btn btn-sm btn-warning" title="Alterar inscrito" data-toggle="tooltip" data-placement="top" role="button">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </td>

            </tr>
            </tbody>
        </table>

        @if($subscribe->events->count() > 0)
            <table class="table table-sm">
                <thead class="thead-light">
                <tr>
                    <th scope="col" colspan="5" class="text-center">{{ $subscribe->events->count() }}
                        Evento{{ $subscribe->events->count() > 1 ? 's' : '' }}</th>
                </tr>
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Evento</th>
                    <th scope="col" class="text-center">Data</th>
                    <th scope="col" class="text-center">Período de Inscrição</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>

                @foreach($subscribe->events as $event)
                    <tr>
                        <th scope="row" class="text-center">{{ $event->id }}</th>
                        <td class="text-center">{{ eventName($event->edition, $event->name) }}</td>
                        <td class="text-center">{{ formatDate($event->event_day) }}</td>
                        <td class="text-center">{{ formatDate($event->subscribe_begin) }} à {{ formatDate($event->subscribe_end) }}</td>
                        <td class="text-center">
                            <a href="{{ route('event.show', $event->id) }}" class="btn btn-sm btn-info" title="Visualizar evento" data-toggle="tooltip" data-placement="top" role="button">
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-info text-center">Nenhum evento para este inscrito.</div>
        @endif
    </div>




@endsection
