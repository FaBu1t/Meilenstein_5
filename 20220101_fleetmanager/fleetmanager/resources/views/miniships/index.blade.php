@extends('layouts.layout')

@section('content')
        <h1>Alle Mini-Schiffsmodelle</h1>
        {{ $entities->links() }}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Kleiner Bruder von Schiff-ID</th>
                    <th>Scale</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entities as $index=>$miniship)
                    <tr>
                        <td>{{ $miniship->name}}</td>
                        <th>{{ $miniship->ship_id}}</th>
                        <td>{{ $miniship->scale}}</td>
                        
                        <td>
                            <a href="{{url('miniships/show/'.$miniship->id)}}" class="btn btn-success">Show</a>
                            <a href="{{url('miniships/edit/'.$miniship->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('miniships/delete/'.$miniship->id)}}" class="btn btn-danger">Del</a>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="{{url('miniships/add')}}" class="btn btn-success">Add</a>
                    </td>
                </tr>   
            </tfoot>
        </table>
        {{ $entities->links() }}
@endsection 