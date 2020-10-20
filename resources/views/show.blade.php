@extends('layouts.app')

@section('content')

  <ul>
    <li>{{ $phone->modello }}</li>
    <li>{{ $phone->anno }}</li>
    <li>{{ $phone->description }}</li>
  </ul>

@endsection
