 @csrf
<div class="form-group">
     <label for="name">Name :</label>
     <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $client->name }}" placeholder="Entrer votre nom">
     @error('name')
          <div id="name" class="invalid-feedback">{{ $message }}</div>
     @enderror
</div>
<div class="form-group">
     <label for="email">Email :</label>
     <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $client->email }}" placeholder="Entrer votre nom">
     @error('email')
          <div id="email" class="invalid-feedback">{{$message  }}</div>
     @enderror
</div>

<div class="form-group">
     <select class="custom-select @error('status') is-invalid @enderror" name="status">
          @foreach($client->getStatusOptions() as $key => $value)
               <option value="{{ $key }}" {{ $client->status == $value ? 'selected' : "" }}>{{ $value }}</option>
          @endforeach

          @error('status')
               <div class="invalid-feedback alert alert-danger">{{ $errors->first('status') }}</div>
          @enderror
     </select>
</div>
<div class="form-group">
     <select class="custom-select @error('entreprise_id') is-invalid @enderror" name="entreprise_id">
          @foreach($entreprises as $entreprise)
               <option value="{{ $entreprise->id }}" {{ $client->entreprise_id == $entreprise->id ? 'selected' : '' }}>{{ $entreprise->name }}</option>
          @endforeach
          @error('entreprise_id')
               <div class="invalid-feedback alert alert-danger">{{ $errors->first('entreprise_id') }}</div>
          @enderror
     </select>
</div><br>