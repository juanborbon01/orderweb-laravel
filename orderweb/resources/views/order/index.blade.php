@extends('templates.base')
@section('title','listado ordenes')
@section('header','listado ordenes')
@section('content')
<div class="row">
    <div class=" col-lg-12 mb-4 d-grip gap-2 d-mb-block">
        <a href="{{ route('order.create') }}" class="btn btn primary">crear</a>
    </div>
</div>

@include('templates.messages')

<div class="row">
<div class="col-lg-12 mb-4">
    <table id="table_data" class="table-striped table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>FECHA</th>
                <th>DIRECCION</th>
                <th>Ciudad</th>
                <th>Acciones</th>
                <th>Observaciones</th>
                <th>Causal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order['id'] }}</td>
                <td>{{ $order['legalization_date'] }}</tr>
                <td>{{ $order['address'] }}</tr>
                <td>{{ $order['city'] }}</tr>
                <td>{{ optional($order->observation)->description ??'' }}</tr>
                <td>{{ optional($order->Causal)->description ??'' }}</tr>
                <td>
                    <a href="{{ route('order.edit',$order['id']) }}" title="editar" 
                    class="btn btn-info-circle btn-sm">
                    <i class="far-fa-edit"></i>
                </a>
                <a href="{{ route('order.destroy',$order['id']) }}" title="eliminar" 
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
<script>src = "{{ asset('js/general.js') }}"</script>
@endsection