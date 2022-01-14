@extends('layouts.index')
@section('content')
<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li><a href="{{ route('formblog') }}">Form Blog</a></li>
        <li><a href="{{ route('formportofolio') }}">Form Portofolio</a></li>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    </ul>
</div>
<form class="form1" method="POST" action="{{ route("dashboard.add-blog") }}">
    @csrf
    <div class="form-group">
      <label for="titre">Titre</label>
      <input type="text" name="titre" class="form-control" id="titre">
    </div>
    <div class="form-group">
      <label for="images">Image</label>
      <input type="text" name="images" class="form-control" id="image">
    </div>
    <label for="Description">Description</label>
    <textarea class="form-control" name="descrip" rows="3"></textarea>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection
