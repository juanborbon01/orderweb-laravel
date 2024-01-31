@extends('templates.base')
@section('title','edit observation')
@section('header','edit observation')
@section('content')

    @include('templates.messages')
    <div class="row"> 
        <div class="col-lg-12 mb-4">
                <form action="#" method="POST">
                    @csrf

                        <div class="row form-group">
                            <div class="col-lg-12 mb-4">
                                <label for="description">Descripcion</label>
                                <input type="text" class="form-control" 
                                id="description" name="description" required>

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
                        <a href="{{ route('observation.index') }}" class="btn btn-secondary btn-block">
                            Cancelar
                                </a>
                    </div>



                </form>

        </div>

    </div>
    

@endsection
