<div class="form-group row">
    {!! Form::label('edition', 'Edição', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    <div class="col-md-6">
        {!! Form::number('edition', null, ['class' => 'form-control' . (!empty($errors->first('edition')) ? ' is-invalid' : ''), 'autofocus']) !!}
        @include('layouts._errors', ['field' => 'edition'])
    </div>
</div>

<div class="form-group row">
    {!! Form::label('name', 'Nome', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control' . (!empty($errors->first('name')) ? ' is-invalid' : ''), 'autofocus']) !!}
        @include('layouts._errors', ['field' => 'name'])
    </div>
</div>

<div class="form-group row">
    {!! Form::label('description', 'Descrição', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    <div class="col-md-6">
        {!! Form::text('description', null, ['class' => 'form-control' . (!empty($errors->first('description')) ? ' is-invalid' : ''), 'autofocus']) !!}
        @include('layouts._errors', ['field' => 'description'])
    </div>
</div>

<div class="form-group row">
    {!! Form::label('event_day', 'Data do Evento', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    <div class="col-md-6">
        {!! Form::date('event_day', null, ['class' => 'form-control' . (!empty($errors->first('event_day')) ? ' is-invalid' : ''), 'autofocus']) !!}
        @include('layouts._errors', ['field' => 'event_day'])
    </div>
</div>

<div class="form-group row">
    {!! Form::label('subscribe_begin', 'Data Início das Inscrições', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    <div class="col-md-6">
        {!! Form::date('subscribe_begin', null, ['class' => 'form-control' . (!empty($errors->first('subscribe_begin')) ? ' is-invalid' : ''), 'autofocus']) !!}
        @include('layouts._errors', ['field' => 'subscribe_begin'])
    </div>
</div>

<div class="form-group row">
    {!! Form::label('subscribe_end', 'Data Fim das Inscrições', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
    <div class="col-md-6">
        {!! Form::date('subscribe_end', null, ['class' => 'form-control' . (!empty($errors->first('subscribe_end')) ? ' is-invalid' : ''), 'autofocus']) !!}
        @include('layouts._errors', ['field' => 'subscribe_end'])
    </div>
</div>

