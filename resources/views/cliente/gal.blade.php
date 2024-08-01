@extends('/plantilla/plantilla')

@section('titulo','acerca de')
<script>
  function filtcategories(c) {
  var all = document.querySelectorAll(".gallery-item");
  all.forEach(i => {
      if (c === 'all' || i.classList.contains(c)) {
          i.parentNode.style.display = "block"
      } else {
          i.parentNode.style.display = "none"
      }

  });
  }
</script>
              <style>
                  .gallery-item {
                      width: 100%;
                      height: 7.7rem;
                      object-fit: cover;
                  }
                  #gallery_button {
                      display: flex;
                      gap: .5rem;
                      flex-wrap: wrap
                  }
                  #gallery_button > button{
                      background-color: #91FE71;
                      font-style: none;
                      border: none;
                      border-radius: 1rem;
                      padding: 1rem;
                      margin: 0 .4rem 0 0;
                  }
                  #gallery_button > button:hover{
                      background-color: #2b4b21;
                  }
</style>
            <!-- ======= Gallery Section ======= -->
            <section id="gallery" class="gallery">
              <div class="container">

                <div class="section-title" data-aos="fade-up">
                  <h2>Galeria</h2>
                  <p>Checa nuestros estilos</p>
                </div>

                <h2 class="title_todo">Filtro por categorias</h2>
                <div id="gallery_button" class="p-5 ">
                    <button onclick="filtcategories('all')">Mostrar todos</button>
                    <button onclick="filtcategories('evento')">evento</button>
                    <button onclick="filtcategories('trabajo')">trabajo</button>
                    <button onclick="filtcategories('luces')">luces</button>
                    <button onclick="filtcategories('sin_luces')">sin luces</button>
                    <button onclick="filtcategories('extras')">extras</button>
                </div>

                <div class="row g-0" data-aos="fade-left">
                    @foreach ($galeriaToldos as $toldo)
                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item evento" data-aos="zoom-in" data-aos-delay="100">
                      <a href="{{ asset("storage/".$toldo->imagen) }}" class="gallery-lightbox">
                        <img src="{{ asset("storage/".$toldo->imagen) }}" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>
                  @endforeach
                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item evento" data-aos="zoom-in" data-aos-delay="100">
                      <a href="img/gallery/toldos_evento.jpg" class="gallery-lightbox">
                        <img src="img/gallery/toldos_evento.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item evento" data-aos="zoom-in" data-aos-delay="150">
                      <a href="img/gallery/toldos_evento_2.jpg" class="gallery-lightbox">
                        <img src="img/gallery/toldos_evento_2.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item evento" data-aos="zoom-in" data-aos-delay="150">
                      <a href="img/gallery/toldos_evento_3.jpg" class="gallery-lightbox">
                        <img src="img/gallery/toldos_evento_3.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item trabajo" data-aos="zoom-in" data-aos-delay="200">
                      <a href="img/gallery/toldo_trabajo_1.jpg" class="gallery-lightbox">
                        <img src="img/gallery/toldo_trabajo_1.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item trabajo" data-aos="zoom-in" data-aos-delay="250">
                      <a href="img/gallery/toldo_trabajo_2.jpg" class="gallery-lightbox">
                        <img src="img/gallery/toldo_trabajo_2.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item luces" data-aos="zoom-in" data-aos-delay="300">
                      <a href="img/gallery/toldos_luces_1.jpg" class="gallery-lightbox">
                        <img src="img/gallery/toldos_luces_1.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item luces" data-aos="zoom-in" data-aos-delay="350">
                      <a href="img/gallery/toldos_luces_2.jpg" class="gallery-lightbox">
                        <img src="img/gallery/toldos_luces_2.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item luces" data-aos="zoom-in" data-aos-delay="350">
                      <a href="img/gallery/toldos_luces_3.jpg" class="gallery-lightbox">
                        <img src="img/gallery/toldos_luces_3.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item sin_luces" data-aos="zoom-in" data-aos-delay="400">
                      <a href="img/gallery/toldo_sin_luces_1.jpg" class="gallery-lightbox">
                        <img src="img/gallery/toldo_sin_luces_1.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item sin_luces" data-aos="zoom-in" data-aos-delay="450">
                      <a href="img/gallery/toldos_sin_luces_2.jpg" class="gallery-lightbox">
                        <img src="img/gallery/toldos_sin_luces_2.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item extras" data-aos="zoom-in" data-aos-delay="450">
                      <a href="img/gallery/toldos_extras_1.jpg" class="gallery-lightbox">
                        <img src="img/gallery/toldos_extras_1.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item extras" data-aos="zoom-in" data-aos-delay="450">
                      <a href="img/gallery/toldos_extras_2.webp" class="gallery-lightbox">
                        <img src="img/gallery/toldos_extras_2.webp" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                </div>

              </div>
            </section><!-- End Gallery Section -->

@section('contenido')
@endsection
