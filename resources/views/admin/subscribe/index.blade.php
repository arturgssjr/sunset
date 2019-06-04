@extends('layouts.app')

@section('content')
    <div class="container">
        @includeIf('layouts._confirmation-modal')
        @if($subscribes->count() > 0)
        <table class="table table-striped table-sm">
            <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Nome</th>
                <th scope="col" class="text-center">E-mail</th>
                <th scope="col" class="text-center">Contato</th>
                <th scope="col" class="text-center">Eventos Inscritos</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($subscribes as $subscribe)
                <tr>
                    <th scope="row" class="text-center">{{ $subscribe->id}}</th>
                    <td class="text-center">{{ $subscribe->name}}</td>
                    <td class="text-center">{{ $subscribe->email}}</td>
                    <td class="text-center">{{ formatMobileNumber($subscribe->phone) }}</td>
                    <td class="text-center">{{ $subscribe->events->count() }}</td>
                    <td class="text-center">
                        <a href="{{ route('subscribe.show', $subscribe->id) }}" class="btn btn-sm btn-info" title="Visualizar inscrito" data-toggle="tooltip" data-placement="top" role="button">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        {{--<a href="#" class="btn btn-sm btn-warning" title="Alterar inscrito" data-toggle="tooltip" data-placement="top" role="button">--}}
                            {{--<i class="fas fa-pencil-alt"></i>--}}
                        {{--</a>--}}
                        {{--<button class="btn btn-sm btn-danger load-confirmation-modal" data-toggle="tooltip" data-placement="top" title="Remover inscrito" role="button" data-url="#" data-type="Inscrito" data-name="{{ $subscribe->name }}" data-target="#confirmation-modal" data-toggle="modal">--}}
                            {{--<i class="fas fa-trash-alt"></i>--}}
                        {{--</button>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $subscribes->links() }}
        @else
        <div class="alert alert-info text-center">Nenhum inscrito cadastrado.</div>
        @endif
    </div>
@endsection
