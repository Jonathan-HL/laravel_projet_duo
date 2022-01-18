@extends('layouts.index')
@section('content')
<p>Titre: {{ $id->titre }}</p>
<p>Image: {{ $id->images }}</p>
<p>Description: {{ $id->decription }}</p>
@endsection
