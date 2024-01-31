@extends('templates.base')
@section('title','crear actividad')
@section('header','crear actividad')
@section('content')

    @include('templates.messages')
    <div class="row"> 
        <div class="col-lg-12 mb-4">
                <form action="#" method="POST">
                    @csrf

                        <div class="row form-group">
                            <div class="col-lg-6 mb-4">
                                <label for="description">Descripcion</label>
                                <input type="text" class="form-control" 
                                id="description" name="description" required>

                            </div>
                            <div class="col-lg-6 mb-4">
                                <label for="hours">horas estimadas</label>
                                <input type="number" class="form-control" 
                                id="hours" name="hours" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-lj-6 mb-4">
                                <label for="technician_id">tecnico</label>
                                <select name="technician_id" id="technician_id"
                                class="form-control" required>
                                <option value="">seleccione</option>
                                </select>
                            </div>
                        <div class="row form-group">
                            <div class="col-lj-6 mb-4">
                                <label for="technician_id">tecnico</label>
                                <select name="technician_id" id="technician_id"
                                class="form-control" required>
                                <option value="">seleccione</option>
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