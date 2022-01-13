@extends('layouts.index')
@section('content')
<div class="col-sm-3 col-md-2 sidebar">
    {{-- <ul class="nav nav-sidebar">
        <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Analytics</a></li>
        <li><a href="#">Export</a></li>
    </ul> --}}
    <ul class="nav nav-sidebar">
        <li><a href="{{ route('formblog') }}">Form Blog</a></li>
        <li><a href="{{ route('formportofolio') }}">Form Portofolio</a></li>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        {{-- <li><a href="">One more nav</a></li>
        <li><a href="">Another nav item</a></li>
        <li><a href="">More navigation</a></li> --}}
    </ul>
    {{-- <ul class="nav nav-sidebar">
        <li><a href="">Nav item again</a></li>
        <li><a href="">One more nav</a></li>
        <li><a href="">Another nav item</a></li>
    </ul> --}}
</div>
<form class="form1">
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Image</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control" rows="3">Description</textarea>
    {{-- <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" id="exampleInputFile">
      <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox"> Check me out
      </label>
    </div> --}}
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection