@extends('layouts.layout')

@section('content')
        <h1>Der Hersteller "{{ $entity->name}}"</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <th>{{ $entity->name}}</th>
                        <th>{{ $entity->rating}}</th>
                        <th></th>
                    </tr>   
                
            </tbody>
        </table>
@endsection
