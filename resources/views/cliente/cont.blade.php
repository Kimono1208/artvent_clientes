@extends('plantilla.plantilla')

@section('titulo', 'contacto')

@section('contenido')
<section class="container-fluid px-xs-12 px-sm-6 px-md-8 px-lg-12 ">
    <div class="contenedor">
        <h2 class="title">{{ isset($cotizacion) ? 'Actualizar' : 'Crear' }} cotizacion</h2>
        {!! isset($cotizacion) ? '<b>Indice de cotizacion: </b>' . $cotizacion->id : '' !!}
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="row g-4 needs-validation" novalidate method="POST"
    action="{{ isset($cotizacion) ? route('cotizacion.update', $cotizacion->id) : route('cotizacion.store') }}">
        @csrf
        @if (isset($cotizacion))
            @method('PUT')
        @endif

        <div class="col-md-4">
            <label for="ancho" class="form-label">Ancho</label>
            <input type="text" class="form-control @error('ancho') is-invalid @enderror" name="ancho"
                id="ancho" value="{{ old('ancho', isset($cotizacion) ? $cotizacion->ancho : '') }}" required>
            @error('ancho')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="largo" class="form-label">Largo</label>
            <input type="text" class="form-control @error('largo') is-invalid @enderror" name="largo"
                id="largo" value="{{ old('largo', isset($cotizacion) ? $cotizacion->largo : '') }}" required>
            @error('largo')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>


        <div class="col-md-4">
            <label for="tipo" class="form-label">tipo</label>
            <input type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo"
                id="tipo" value="{{ old('tipo', isset($cotizacion) ? $cotizacion->tipo : '') }}" required>
            @error('tipo')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="cantidad_personas" class="form-label">cantidad_personas</label>
            <input type="text" class="form-control @error('cantidad_personas') is-invalid @enderror" name="cantidad_personas"
                id="cantidad_personas" value="{{ old('cantidad_personas', isset($cotizacion) ? $cotizacion->cantidad_personas : '') }}" required>
            @error('cantidad_personas')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="lugar" class="form-label">lugar</label>
            <input type="text" class="form-control @error('lugar') is-invalid @enderror" name="lugar"
                id="lugar" value="{{ old('lugar', isset($cotizacion) ? $cotizacion->lugar : '') }}" required>
            @error('lugar')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="luces" class="form-label">Luces</label>
            <input type="checkbox" class="form-check-input @error('luces') is-invalid @enderror" name="luces"
                id="luces" {{ old('luces', isset($cotizacion) ? $cotizacion->luces : '') ? 'checked' : '' }}>
            @error('luces')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="conexiones" class="form-label">Conexiones</label>
            <input type="checkbox" class="form-check-input @error('conexiones') is-invalid @enderror" name="conexiones"
                id="conexiones" {{ old('conexiones', isset($cotizacion) ? $cotizacion->conexiones : '') ? 'checked' : '' }}>
            @error('conexiones')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="mesas" class="form-label">Mesas</label>
            <input type="text" class="form-control @error('mesas') is-invalid @enderror" name="mesas"
                id="mesas" value="{{ old('mesas', isset($cotizacion) ? $cotizacion->mesas : '') }}">
            @error('mesas')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="sillas" class="form-label">Sillas</label>
            <input type="text" class="form-control @error('sillas') is-invalid @enderror" name="sillas"
                id="sillas" value="{{ old('sillas', isset($cotizacion) ? $cotizacion->sillas : '') }}">
            @error('sillas')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="tarimas" class="form-label">Tarimas</label>
            <input type="text" class="form-control @error('tarimas') is-invalid @enderror" name="tarimas"
                id="tarimas" value="{{ old('tarimas', isset($cotizacion) ? $cotizacion->tarimas : '') }}">
            @error('tarimas')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="color" class="form-label">Color</label>
            <input type="text" class="form-control @error('color') is-invalid @enderror" name="color"
                id="color" value="{{ old('color', isset($cotizacion) ? $cotizacion->color : '') }}">
            @error('color')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="cortinas" class="form-label">Cortinas</label>
            <input type="checkbox" class="form-check-input @error('cortinas') is-invalid @enderror" name="cortinas"
                id="cortinas" {{ old('cortinas', isset($cotizacion) ? $cotizacion->cortinas : '') ? 'checked' : '' }}>
            @error('cortinas')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="decoracion_extra" class="form-label">Decoración Extra</label>
            <textarea class="form-control @error('decoracion_extra') is-invalid @enderror" name="decoracion_extra"
                id="decoracion_extra">{{ old('decoracion_extra', isset($cotizacion) ? $cotizacion->decoracion_extra : '') }}</textarea>
            @error('decoracion_extra')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div>

        {{-- <div class="col-md-4">
            <label for="status" class="form-label">Status</label>
            <select class="form-select @error('status') is-invalid @enderror" name="status" id="status"
                required>
                <option value="disponible"
                    {{ old('status', isset($cotizacion) ? $cotizacion->status : '') == 'disponible' ? 'selected' : '' }}>
                    Disponible</option>
                <option value="no_disponible"
                    {{ old('status', isset($cotizacion) ? $cotizacion->status : '') == 'no_disponible' ? 'selected' : '' }}>No
                    Disponible</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @else
                <div class="valid-feedback">¡Correcto!</div>
            @enderror
        </div> --}}

        <div class="col-12">
            <button class="btn btn-primary" type="submit">{{ isset($cotizacion) ? 'Actualizar' : 'Guardar' }}
                Toldo</button>
            {!! isset($cotizacion)
                ? '<a href="' . route('cotizacion.index') . '" class="btn btn-secondary">Cancelar</a>'
                : '<a href="' . route('cotizacion.index') . '" class="btn btn-secondary">Regresar</a>' !!}
        </div>
    </form>
</section>
<script>
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
<script src="{{ asset('../js/form.js') }}"></script>


                            <!-- Mensajes de éxito y error -->
{{--                             <div class="my-3">
                                <div class="loading">Cargando</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
                            </div>
                            <div>
                                {{ isset($success) ? $success : '' }}
                            </div>

                            <!-- Botón de envío -->
                            <div class="text-center"><button type="submit">Enviar Cotización</button></div>
                        </form>
                    @else
                        <!-- Botón para iniciar sesión -->
                        <div class="text-center">
                            <a href="{{ route('register') }}" class="text-center">Registrate para Cotizar</a>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('login') }}" class="text-center">Iniciar Sesión para Cotizar</a>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </section> --}}
@endsection
