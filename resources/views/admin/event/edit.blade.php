@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                {!! Form::model($event, ['route' => ['event.update', $event->id], 'method' => 'POST']) !!}
                @method('PUT')

                @include('sunset.admin.event._form')

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        {!! Form::submit('Alterar', ['class' => 'btn btn-warning']) !!}
                        <a href="{{ route('event.index') }}" class="btn btn-dark">Cancelar</a>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
