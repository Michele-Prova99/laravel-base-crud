@extends('layouts.app')

@section('content')
  <form action="{{ (!empty($phone)) ? route('phones.update',$phone->id): route('phones.store') }}" method="post">

@csrf

@if(!empty($phone))
  @method('PATCH')
  <input type="hidden" name="id" value="{{ $phone->id }}">
@else
  @method('POST')
@endif

<label for="modello">Modello</label>
<input type="text" name="modello" placeholder="Modello" id="modello" value="{{ (!empty($phone)) ? $phone->modello : old('modello') }}">

<label for="anno">Anno</label>
<input type="text" name="anno" placeholder="Anno" id="anno" value="{{ (!empty($phone)) ? $phone->anno : old('anno') }}">

<label for="desc">Description</label>
<textarea name="description" rows="8" cols="80">{{ (!empty($phone)) ? $phone->description : old('description') }}</textarea>

<input type="submit" value="Invia">
</form>

@endsection
