@extends('layouts.default')
@section('content')

     <form action="{{ route('client.store') }}" method="POST" class="col-md-8">
          @include('layouts.form')
          
          <button type="submit" class="btn btn-primary btn-block">Ajouter un client</button><br><br>
     </form>
@endsection