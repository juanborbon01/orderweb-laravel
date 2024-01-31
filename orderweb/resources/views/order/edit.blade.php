@extends('templates.base')
@section('title','edit orden')
@section('header','edit orden')
@section('content')

    @include('templates.messages')
    <div class="row"> 
        <div class="col-lg-12 mb-4">
                <form action="#" method="POST">
                    @csrf
                        <div class="row form-group">
                            <div class="col-lg-4 mb-4">
                                <label for="document">Documento</label>
                                <input type="number" class="form-control" 
                                id="document" name="document" required>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label for="name">nombre</label>
                            <input type="text" class="form-control" 
                            id="name" name="name" required>
                        </div>
                    </div>
                        <div class="row form-group">
                            <div class="col-lg-4 mb-4">
                                <label for="technician_id">especialidad</label>
                                <select class="form-control" 
                                id="technician_id" name="technician_id" required>
                                <option value="">seleccione</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label for="telephone">telefono</label>
                             <input type="number" class="form-control" id="telephone" name="telephone"required>                                
                                </div>
                        </div>
                        <div class="row form-group">
                            <label class="col-lg-6 mb-4">
                                <button class="btn btn-primary btn-block"
                                        type="submit">
                                    guardar
                                </button>
                                </div>


                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('order.index') }}" class="btn btn-secondary btn-block">
                            Cancelar
                                </a>
                    </div>



                </form>

        </div>

    </div>
    

@endsection
