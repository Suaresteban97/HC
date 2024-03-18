@extends('/templates/header')

@section('content')

<div class="container text-center" id="login-container">
    <div class="row">
        <div class="col">
            <h2 class="border-bottom border-primary border-4 pb-1">Listado de sedes</h2>

            <form action="{{ route('edit', ['page' => $branches->currentPage()]) }}" method="GET">
                <input class="form-control" type="text" name="search" placeholder="Buscar por nombre" value="{{ $searchKeyword }}">
                <button class="btn btn-success" type="submit">Buscar</button>
            </form>

            <ul class="list-group">
                @foreach($branches as $branch)
                    <li class="list-group-item">{{$branch->hc_code}}: {{ $branch->name }} <a href="{{ route('editBranch', ['id' => $branch->id]) }}">editar</a></li>
                @endforeach
            </ul>
        </div>
        <div class="mt-3">
            Mostrar página:
            <select id="pageSelector" onchange="location = this.value;">
            @for ($i = 1; $i <= $branches->lastPage(); $i++)
                <option value="{{ route('edit', ['page' => $i, 'search' => $searchKeyword]) }}" {{ $branches->currentPage() === $i ? 'selected' : '' }}>
                    {{ $i }}
                </option>
            @endfor
            </select>
        </div>
    </div>    
</div>

@endsection