@extends('templates.base')
@section('title','listado tipos de actividades')
@section('header','listado tipos de actividades')
@section('content')
    <div class="row">
            <div class=" col-lg-12 mb-4 d-grip gap-2 d-mb-block">
                <a href="{{ route('type_activity.create') }}" class="btn btn primary">crear</a>
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
                    @foreach ($typeactivitys as $typeactivity)
                    <tr>
                        <td>{{ $typeactivity['id'] }}</td>
                        <td>{{ $typeactivity['description'] }} </td>
                        <td>
                            <a href="{{ route('type_activity.edit',$typeactivity['id']) }}" title="editar" 
                            class="btn btn-info-circle btn-sm">
                            <i class="far-fa-edit"></i>
                        </a>
                        <a href="{{ route('type_activity.destroy',$typeactivity['id']) }}" title="eliminar" 
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
