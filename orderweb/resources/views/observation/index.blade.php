@extends('templates.base')
@section('title','listado observation')
@section('header','listado observation')
@section('content')
<div class="row">
    <div class=" col-lg-12 mb-4 d-grip gap-2 d-mb-block">
        <a href="{{ route('observation.create') }}" class="btn btn primary">crear</a>
    </div>
</div>

@include('templates.messages')

<div class="row">
<div class="col-lg-12 mb-4">
    <table id="table_data" class="table-striped table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>observation</td>
                <td>observation de prueba</td>
                <td>
                    <a href="#" title="editar" 
                    class="btn btn-info-circle btn-sm">
                    <i class="far-fa-edit"></i>
                </a>
                <a href="#" title="eliminar" 
                    class="btn btn-danger btn-circle btn-sm"
                    onclick = "return remove()">
                <i class="fas-fa-trash"></i>
                </a>
            </td>
        </tr>
    </tbody>
</table>
</div>
</div>
@endsection

@section('scripts')
<script>src = "{{ asset('js/general.js') }}"</script>
@endsection