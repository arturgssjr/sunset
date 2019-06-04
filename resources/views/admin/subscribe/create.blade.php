@extends('welcome')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                {!! Form::open(['route' => 'subscribe.store']) !!}

                @include('admin.event._form')

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('event.index') }}" class="btn btn-dark">Cancelar</a>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
