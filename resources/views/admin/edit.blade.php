@extends('layouts.index')
@section('content')
<h1>Formulaire de modification</h1>
<form action="{{route('updblog.update', $editblog->id)}}" method="POST" class="w-50 mx-auto">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="titre">Titre</label>
      <input type="text" class="form-control" id="titre" name="titre" value="{{$editblog->titre}}" placeholder="titre">
    </div>
    <div class="form-group">
      <label for="images">Image</label>
      <input type="text" class="form-control" id="images" name="images" value="{{$editblog->images}}" placeholder="Image">
    </div>
    <div class="form-group">
        <label for="decription">Decription</label>
        <input type="text" class="form-control" id="decription" name="decription" value="{{$editblog->decription}}" placeholder="decription">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
