@extends('layouts._base')
@section('content')
<!-- ======= Hero Section ======= -->

  
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Bienvenue à <span>Yobalema</span></h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Découvrez le confort et la flexibilité d'une voiture de location grâce à notre site convivial et à notre flotte diversifiée de véhicules modernes. </p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="/reservation/1" class="btn-get-started">Réserver</a>
          </div>

          @include('layouts._navbar')

      <!-- end navbar -->

        </div>
      </div>
    </div>

  </section><!-- End Hero Section -->


  @include('layouts._sidebar')

@endsection 


