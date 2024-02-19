@extends('templates.base')
@section('title','crear orden')
@section('header','crear orden')
@section('content')

    @include('templates.messages')
    <div class="row"> 
        <div class="col-lg-12 mb-4">
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                        <div class="row form-group">
                            <div class="col-lg-4 mb-4">
                                <label for="legalization_date">fechade legalizacion</label>
                                <input type="number" class="form-control" 
                                id="legalization_date" name="legalization_date" required value="{{ old('legalization_date') }}">
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label for="adreess">direcion</label>
                            <input type="text" class="form-control" 
                            id="adreess" name="adreess" required value= "{{ old('addreess') }}">
                        </div>
                    </div>
                        <div class="row form-group">
                            <div class="col-lg-4 mb-4">
                                <label for="city">Ciudad</label>
                                <select class="form-control" 
                                id="city" name="city" required>
                                <option value="">seleccione</option
                                @foreach ($cities as $city)>
                                <option value="{{ $city['value'] }}">
                                {{ $city['name'] }}
                            </option>
                            @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label for="especiality">Observaciones</label>
                             <select name="especiality" id="especiality" class="form-control">
                                <option value="">selecccione</option>  
                                @foreach ($observations as $observation)
                                <option value="{{ $observation['id'] }}">
                                {{ $observation['description'] }}
                            </option> 
                            @endforeach
                                </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label for="causal_id">Causal</label>    
                            <select name="causal_id" id="causal_id" class="form-control">
                            <option value="">seleccione</option>
                            @foreach ($causals as $causal)>
                                <option value="{{ $causal['id'] }}">
                                {{ $causal['name'] }}
                            </option>
                            @endforeach
                            </select>                            
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
