@extends('layouts.index')
@section('content')
<div class="col-sm-3 col-md-2 sidebar">

    <ul class="nav nav-sidebar">
        <li><a href="{{ route('formblog') }}">Form Blog</a></li>
        <li><a href="{{ route('formportofolio') }}">Form Portofolio</a></li>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    </ul>
</div>
    <form class="form1" method="POST" action="{{ route("dashboard.add-porto") }}">
        @csrf
        <div class="form-group">
          <label for="title">Titre</label>
          <input type="text" name="title" class="form-control" id="title">
        </div>
        <label for="decription">Description</label>
        <textarea class="form-control" name="decription" rows="3"></textarea>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    @endsection
