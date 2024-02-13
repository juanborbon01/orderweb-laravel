@extends('templates.base')
@section('title','edit actividad')
@section('header','edit actividad')
@section('content')

@include('templates.messages')
<div class="row"> 
    <div class="col-lg-12 mb-4">
            <form action="{{ route('activity.update', $activity['id']) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="row form-group">
                        <div class="col-lg-6 mb-4">
                            <label for="description">Descripcion</label>
                            <input type="text" class="form-control" 
                            id="description" name="description" required value="{{ $activity['description'] }}">

                        </div>
                        <div class="col-lg-6 mb-4">
                            <label for="hours">horas estimadas</label>
                            <input type="number" class="form-control" 
                            id="hours" name="hours" required value="{{ $activity['description'] }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lj-6 mb-4">
                            <label for="technician_id">tecnico</label>
                            <select name="technician_id" id="technician_id"
                            class="form-control" required>
                            <option value="">seleccione</option>
                            @foreach ($technicians as $technician)
                                <option value="{{ $technician['document'] }}"
                                    @if($technician['document'] == $activity['technician_id']) selected @endif>
                                    {{  $technician['name'] }}</option>
                            </select>
                            @endforeach
                        </div>
                    <div class="row form-group">
                        <div class="col-lj-6 mb-4">
                            <label for="technician_id">tipo</label>
                            <select name="type_id" id="type_id"
                            class="form-control" required>
                            <option value="">seleccione</option>
                            @foreach ($types as $type)
                                <option value="{{ $type['id'] }}"
                                @if($type['id'] == $activity['type_id']) selected @endif>
                                {{ $type['description'] }}
                            </option>
                            @endforeach
                            </select>
                        </div>

                    </div>

                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6 mb-4">
                            <button class="btn btn-primary btn-block"
                                    type="submit">
                                guardar
                            </button>
                            </div>

                <div class="col-lg-6 mb-4">
                    <a href="{{ route('activity.index') }}" class="btn btn-secondary btn-block">
                        Cancelar
                            </a>
                </div>



            </form>

    </div>

</div>
@endsection