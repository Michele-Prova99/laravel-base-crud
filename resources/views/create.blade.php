@extends('layouts.app')

@section('content')

  <form action="{{route('phones.store')}}" method="post">
@csrf
@method('POST')

<label for="modello">Modello</label>
<input type="text" name="modello" placeholder="Modello" id="modello" value="{{ old('modello') }}">

<label for="anno">Anno</label>
<input type="text" name="anno" placeholder="Anno" id="anno" value="{{ old('anno') }}">

<label for="desc">Description</label>
<textarea name="desc" rows="8" cols="80">{{ old('desc') }}</textarea>

<input type="submit" value="Invia">
</form>

@endsection
