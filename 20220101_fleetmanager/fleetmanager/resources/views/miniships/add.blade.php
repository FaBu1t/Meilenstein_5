@extends('layouts.layout')

@section('content')
        <h1>Mini-Schiffsmodell hinzufügen</h1>
        @include('snippets.error')

        {!! Form::open(['url' => 'miniships/save']) !!}
        {!! Form::select('ship_id',ShipClass::orderBy('name')->get()->pluck('name','id'),null, ['class'=>'form-control'])!!}
        <br/>
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Schiffsname...']) !!}
            <br/>
            {!! Form::text('scale', null, ['class'=>'form-control', 'placeholder'=>'Scale...']) !!}
            <br/>
            {!! Form::submit('Speichern', ['class'=>'btn btn-success']) !!}
            <a href="{{url('miniships')}}" class="btn btn-danger">Abbrechen</a>

        {!! Form::close() !!}
@endsection
