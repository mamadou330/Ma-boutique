@extends('layouts.default')
@section('content')
     <h1  class="text-center text-primary mb-5">Editer le profil de {{ $client->name }}</h1>
     <form action="{{ route('client.update', $client) }}" method="POST" class="col-md-8">
          @method('PUT')
          @include('layouts.form')
          
          <div class="form-group">
               <button type="submit" class="btn btn-primary">Sauvegarder</button>
          </div>
     </form>
@endsection