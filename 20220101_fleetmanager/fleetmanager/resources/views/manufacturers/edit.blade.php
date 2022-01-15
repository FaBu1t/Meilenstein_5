@extends('layouts.layout')

@section('content')
        <h1>Schiff hinzufügen</h1>
        @include('snippets.error')
        {!! Form::model($entity, ['url' => 'manufacturers/update/'.$entity->id]) !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Herstellername...']) !!}
            <br/>
            {!! Form::text('brt', null, ['class'=>'form-control', 'placeholder'=>'Rating...']) !!}
            <br/>
            {!! Form::submit('Speichern', ['class'=>'btn btn-success']) !!}
            <a href="{{url('manufacturers')}}" class="btn btn-danger">Abbrechen</a>

        {!! Form::close() !!}
@endsection
