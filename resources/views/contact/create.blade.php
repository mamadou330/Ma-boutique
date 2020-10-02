@extends('layouts.default')
@section('content')
<h1  class="text-center text-primary mb-5">Contactez-nous</h1>

<form action="{{ route('contact.store') }}" class="col-md-8" method="POST">
     @csrf
     <div class="form-group">
          <label for="name">Name :</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Entrer votre nom">
          @error('name')
               <div id="name" class="invalid-feedback">{{ $message }}</div>
          @enderror
     </div>
     <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')  }}" placeholder="Entrer votre nom">
          @error('email')
               <div id="email" class="invalid-feedback">{{$message  }}</div>
          @enderror
     </div>
     <div class="form-group">
          <label for="message">Message : </label>
          <textarea name="message" id="message" cols="50" rows="10" class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
          @error('message')
               <div id="email" class="invalid-feedback">{{$message  }}</div>
          @enderror
     </div>
     <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
     </div>
</form>
@endsection