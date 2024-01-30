@extends('templates.base')
@section('title','listado causales')
@section('header','listado causales')
@section('content')
    <div class="row">
            <div class=" col-lg-12 mb-4 d-grip gap-2 d-mb-block">
                <a href="{{ route('causal.create') }}" class="btn btn primary">crear</a>
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
                        <td>1</td>
                        <td>causal de prueba</td>
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
<script>
    $(document).ready(function(){
        $('#table-data').DataTable();
    });

    function remove()
    {
        if(confirm("¿esta seguro  de eliminar el registro?"))
            return true;
        else
            return false;
    }
</script>
@endsection