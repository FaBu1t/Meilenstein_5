@extends('layouts.layout')

@section('content')
        <h1>Das Mini-Schiffsmodell "{{ $entity->name}}"</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Kleiner Bruder von Schiff-ID</th>
                    <th>Scale</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <th>{{ $entity->name}}</th>
                        <th>{{ $entity->ship_id}}</th>
                        <th>{{ $entity->scale}}</th>
                        <th></th>
                    </tr>   
                
            </tbody>
        </table>
@endsection
