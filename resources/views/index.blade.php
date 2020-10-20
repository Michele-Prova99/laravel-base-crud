@extends('layouts.app')

@section('content')

  @foreach ($data as $phone)

    <ul>
      <a href="{{ route('phones.show', $phone->id) }}"><li>{{ $phone->modello }}</li></a>
      <li>{{ $phone->anno }}</li>
      <li>{{ $phone->description }}</li>
      <li>
        <form action="{{ route('phones.destroy',$phone->id) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="Cancella">
        </form>
      </li>
    </ul>

  @endforeach

@endsection
