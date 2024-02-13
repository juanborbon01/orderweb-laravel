@extends('templates.base')
@section('title','listado de tecnicos')
@section('header','listado de tecnicos')
@section('content')
    <div class="row">
            <div class=" col-lg-12 mb-4 d-grip gap-2 d-mb-block">
                <a href="{{ route('technician.create') }}" class="btn btn primary">crear</a>
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
                    @foreach ($technicians as $technician)
                        <tr>
                            <td>{{ $technician['document'] }}</td>
                            <td>{{ $technician['name'] }} </td>
                            <td> {{ $technician['especiality'] }}</td>
                            <td>{{ $technician['phone'] }}</td>
                            <td>
                            <a href="{{ route('technician.edit',$technician['document']) }}" title="editar" 
                            class="btn btn-info-circle btn-sm">
                            <i class="far-fa-edit"></i>
                        </a>
                        <a href="{{ route('technician.destroy', $technician['document']) }}" title="eliminar" 
                            class="btn btn-danger btn-circle btn-sm"
                            onclick = "return remove()">
                        <i class="fas-fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>




            
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script> src = "{{ asset('js/general.js') }}"</script>
@endsection