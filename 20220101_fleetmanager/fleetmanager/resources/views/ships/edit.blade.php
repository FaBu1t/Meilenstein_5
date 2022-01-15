@extends('layouts.layout')

@section('content')
        <h1>Schiff hinzufügen</h1>
        @include('snippets.error')
        {!! Form::model($entity, ['url' => 'ships/update/'.$entity->id]) !!}
        {!! Form::select('manufacturer_id',ManufacturerClass::orderBy('name')->get()->pluck('name','id'),null, ['class'=>'form-control'])!!}
        <br/>
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Schiffsname...']) !!}
            <br/>
            {!! Form::text('built', null, ['class'=>'form-control', 'placeholder'=>'Baujahr...']) !!}
            <br/>
            {!! Form::text('age', null, ['class'=>'form-control', 'placeholder'=>'Schiffsalter...']) !!}
            <br/>
            {!! Form::text('length', null, ['class'=>'form-control', 'placeholder'=>'Schiffslänge...']) !!}
            <br/>
            {!! Form::text('height', null, ['class'=>'form-control', 'placeholder'=>'Schiffshöhe...']) !!}
            <br/>
            {!! Form::text('color', null, ['class'=>'form-control', 'placeholder'=>'Schiffsfarbe...']) !!}
            <br/>
            {!! Form::text('brt', null, ['class'=>'form-control', 'placeholder'=>'BRT...']) !!}
            <br/>
            {!! Form::submit('Speichern', ['class'=>'btn btn-success']) !!}
            <a href="{{url('ships')}}" class="btn btn-danger">Abbrechen</a>

        {!! Form::close() !!}
@endsection
