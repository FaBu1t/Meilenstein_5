@extends('layouts.layout')

@section('content')
        <h1>Das Schiff "{{ $entity->name}}"</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    
                    <th>Name</th>
                    <th>Hersteller</th>
                    <th>Built</th>
                    <th>Age</th>
                    <th>Length</th>
                    <th>Height</th>
                    <th>Color</th>
                    <th>BRT</th>
                    <th>Bearbeiten</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <th>{{ $entity->name}}</th>
                        <th>{{ $entity->manufacturer_id}}</th>
                        <th>{{ $entity->built}}</th>
                        <th>{{ $entity->age}}</th>
                        <th>{{ $entity->length}}</th>
                        <th>{{ $entity->height}}</th>
                        <th>{{ $entity->color}}</th>
                        <th>{{ $entity->brt}}</th>
                        <th></th>
                    </tr>   
                
            </tbody>
        </table>
@endsection
