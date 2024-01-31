@extends('templates.base')
@section('title','listado de tecnicos')
@section('header','listado de tecnicos')
@section('content')
    <div class="row">
            <div class=" col-lg-12 mb-4 d-grip gap-2 d-mb-block">
                <a href="{{ route('technitian.create') }}" class="btn btn primary">crear</a>
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
                        <th>horas</th>
                        <th>tecnico</th>
                        <th>tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1117013786 </td>
                        <td>Arnulfo Archundia</td>
                        <td>121212343</td>
                        <td>REPARACION DE MAQUINAS</td>
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
<script> src = "{{ asset('js/general.js') }}"</script>
@endsection