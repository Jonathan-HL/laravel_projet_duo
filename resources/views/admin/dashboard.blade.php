@extends('layouts.index')
@section('content')
<div class="container-fluid mt-10 pt-10" >
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="{{ route('formblog') }}">Form Blog</a></li>
                <li><a href="{{ route('formportofolio') }}">Form Portofolio</a></li>
            </ul>
        </div>
        <div class="-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
            <h2 class="sub-header">Page Blog</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Image</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($allblog as $el)
                        <tr>
                            <td>{{ $el->id }}</td>
                            <td>{{ $el->titre }}</td>
                            <td>{{ $el->image }}</td>
                            <td>{{ $el->descrip }}</td>
                            <td><button type="submit" class="btnWarn"><a href="{{ route("dashboard.showblog", $el->id) }}">Show</a></button></td>
                            {{-- <form action="" method="POST">
                                @csrf
                            @method("PUT")
                            <td><button type="submit" class="btnWarn">Edit</button></td>
                        </form> --}}
                            <form action="{{ route("dashboard.destroy", $el->id) }}" method="POST">
                                @csrf
                            @method("DELETE")
                            <td><button type="submit" class="btnWarn">Delete</button></td>
                        </form>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
                <h2 class="sub-header">Page Portofolio</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($allportofolio as $el)
                        <tr>
                            <td>{{ $el->id }}</td>
                            <td>{{ $el->titre }}</td>
                            <td>{{ $el->decription }}</td>
                            <td><button type="submit" class="btnWarn"><a href="{{ route("dashboard.showporto", $el->id) }}">Show</a></button></td>
                            <form action="{{ route("dashboard.delete", $el->id) }}" method="POST">
                                @csrf
                            @method("DELETE")
                            <td><button type="submit" class="btnWarn">Delete</button></td>
                        </form>
                        </tr>
                        @empty
                        @endforelse
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
