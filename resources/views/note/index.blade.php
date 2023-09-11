@extends('layouts.app')

@section('content')
<a href="{{ route('note.create') }}"> Createn new note</a>
<ul>
    @forelse ($notes as $note)
    <li>
        <a href="{{ route('note.show', $note->id) }}">{{$note->title}}</a> | 
        <a href="{{ route('note.edit', [$note->id]) }}">EDIT</a> | 
        <form action="{{ route('note.destroy', $note->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE">
        </form>
    </li>
    <!--  <li><a href="#">{ {$note->title} }</a> | <a href="{ { route ('note.edit', ['note' => $note->id]) } }">EDIT</a> | <a href="#">DELETE</a></li> OTRA FORMA SI HAY MAS PARAMETROS -->
        @empty
        <p>No data.</p>
    @endforelse
</ul>
@endsection