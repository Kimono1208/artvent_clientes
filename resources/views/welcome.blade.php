<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('plantilla.plantilla')

    @section('titulo', 'contacto')

    @section('contenido')
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contacto</h2>
                    <p>Cotización</p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Ubicación:</h4>
                                <p>Calle Principal, Colonia Centro, Guadalajara, Jalisco, México</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>artvent@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Llamada:</h4>
                                <p>+52 33 1234 5678</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <div class="section-title">
                            <h3>Solicitar Cotización</h3>
                        </div>
                        <a href="/google-auth/redirect" class="text-center">SSO GOOGLE</a>



                        @if (Auth::check())
                            <!-- Tu formulario de cotización aquí -->
                            <form action="{{ route('cotizacion.store') }}" method="POST" role="form" class="php-email-form">
                                @csrf
                                <div class="row">
                                    <!-- Aquí van tus campos de formulario -->
                                    <!-- Ejemplo: -->
                                    <div class="col-md-6 form-group">
                                        <label for="es_guadalajara">¿Su evento es en Guadalajara?</label>
                                        <select name="es_guadalajara" id="es_guadalajara" class="form-select" required>
                                            <option value="">Seleccionar</option>
                                            <option value="si">Sí</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select name="es_aire_libre" class="form-select" aria-label="Default select example"
                                            required>
                                            <option>¿El evento es al aire libre?</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <select name="es_evento_grande" class="form-select" aria-label="Default select example"
                                            required>
                                            <option selected>¿Es un evento grande?</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select name="es_todo_el_dia" class="form-select" aria-label="Default select example"
                                            required>
                                            <option selected>¿El evento sera todo el dia?</option>
                                            <option value="si">Si</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <select name="manana_o_noche" class="form-select" aria-label="Default select example"
                                            required>
                                            <option selected>En caso de que sea medio dia, ¿el evento seria en la noche o en
                                                la mañana?</option>
                                            <option value="Manana">Mañana</option>
                                            <option value="Noche">Noche</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <select name="temporada" class="form-select" aria-label="Default select example" required>
                                        <option selected>Temporada del año</option>
                                        <option value="Verano">Verano</option>
                                        <option value="Otoño">Otoño</option>
                                        <option value="Invierno">Invierno</option>
                                        <option value="Primavera">Primavera</option>
                                    </select>
                                </div>


                                <!-- Mensajes de éxito y error -->
                                <div class="my-3">
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
        </section>
    @endsection

</html>
