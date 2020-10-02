@extends('layouts.default')
@section('content')
     <h1 class="text-center text-primary mb-5">Liste des clients</h1>
     <table class="table table-bordered table-dark table-striped table-hover text-center">
          <thead class="bg-success">
               <tr>
                    <th>#</th><th>Nom</th><th>Email</th><th>Status</th><th>Entreprise</th>
               </tr>
          </thead>
          <tbody>
               @foreach($clients as $client)
                    <tr>
                         <td>{{ $client->id }}</td>
                         <td><a href="{{ route('client.show', $client->id)}}">{{ $client->name }}</a></td>
                         <td><em>{{ $client->email }}</em></td>
                         <td>{{ $client->status }}</td>
                         <td>{{ $client->entreprise->name }}</td>
                    </tr>
               @endforeach
          </tbody>
     </table>
     <a href="{{ route('client.create') }}" class="btn btn-primary">Créer un client</a>
@stop