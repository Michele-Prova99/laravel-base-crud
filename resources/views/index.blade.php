@extends('layouts.app')

@section('content')

  @foreach ($data as $phone)

    <ul>
      <li>{{ $phone->modello }}</li>
      <li>{{ $phone->anno }}</li>
      <li>{{ $phone->description }}</li>
    </ul>

  @endforeach

@endsection
