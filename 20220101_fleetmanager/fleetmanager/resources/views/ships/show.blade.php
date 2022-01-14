@extends('layouts.layout')

@section('content')
        <h1>Das Schiff "{{ $entity->name}}"</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Built</th>
                    <th>Age</th>
                    <th>Length</th>
                    <th>Height</th>
                    <th>BRT</th>
                    <th>Bearbeiten</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <th>{{ $entity->name}}</th>
                        <th>{{ $ship->built}}</th>
                        <th>{{ $ship->age}}</th>
                        <th>{{ $ship->length}}</th>
                        <th>{{ $ship->height}}</th>
                        <th>{{ $entity->brt}}</th>
                        <th></th>
                    </tr>   
                
            </tbody>
        </table>
@endsection
