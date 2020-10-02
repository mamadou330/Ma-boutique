@extends('layouts.default')
@section( 'content')
    <h1  class="text-center text-primary mb-5">{{ $client->name }}</h1>
    <p><strong>Email : </strong>{{ $client->email }}</p>
    <p><strong>Entreprise : </strong>{{ $client->entreprise->name }}</p>
     
     <form action="{{ route('client.destroy', $client) }}" method="POST"  style="display:inline" onsubmit="return confirm('Êtes-vous sûr ?')"> 
          @csrf
          @method('DELETE')
          <div class="form-group">
               <button type="submit" class="btn btn-danger btn-lg">Supprimer</button>
          </div>
     </form> 
    <a href="{{ route('client.update', $client) }}/edit" class="btn btn-warning btn-lg my-3">Modifier</a>
@stop

