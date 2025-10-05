<!-- Header -->
<?php
$pageTitle = "Vitran - Services"; // Define el título de la página
include '../includes/header.php';
?>


<!-- Hero -->
<section class="heroServices d-flex align-items-center" style="min-height: 100vh;">
    <div class="container text-white">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center"> <!-- Centramos el texto y el contenedor,mx-auto para centrar o no-->
                <!-- <h3 class="hero-subtitle text-black">Need it now?</h3> -->
                <h1 class="hero-title text-secondary">Learn about our</h1>
                <p class="hero-description text-black">Services</p>

                <div class="d-flex justify-content-center gap-3 flex-wrap"> <!-- Centramos los botones -->
                    <a href="/views/contact.php" class="btn btn-primary btn-lg text-white">Request a Delivery</a>

                </div>
            </div>
        </div>
    </div>
</section>




 <!-- Servicios -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <!-- Servicio 1 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm text-center">
            <div class="card-body">
              <i class="bi bi-lightning-charge-fill display-4 text-primary mb-3"></i>
              <h5 class="card-title fw-bold">Same day delivery</h5>
              <p class="card-text">Fast and efficient for urgent deliveries within the city.</p>
            </div>
          </div>
        </div>
        <!-- Servicio 2 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm text-center">
            <div class="card-body">
              <i class="bi bi-shop-window display-4 text-primary mb-3"></i>
              <h5 class="card-title fw-bold">Delivery for businesses</h5>
              <p class="card-text">Strategic allies for restaurants, shops and small businesses.</p>
            </div>
          </div>
        </div>
        <!-- Servicio 3 -->
        <div class="col-md-4">
          <div class="card h-100 shadow-sm text-center">
            <div class="card-body">
              <i class="bi bi-calendar-check-fill display-4 text-primary mb-3"></i>
              <h5 class="card-title fw-bold">Scheduled shipments</h5>
              <p class="card-text">Organize your deliveries in advance, with tracking and guarantee.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm text-center">
            <div class="card-body">
              <i class="bi bi-1-circle-fill display-4 text-primary mb-3"></i>
              <h5 class="card-title fw-bold">Next day delivery</h5>
              <p class="card-text">Organize your deliveries one day before, with tracking and guarantee.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm text-center">
            <div class="card-body">
              <i class="bi bi-arrows-move display-4 text-primary mb-3"></i>
              <h5 class="card-title fw-bold">Moving</h5>
              <p class="card-text">Do you need to move something to different parts of the city? Vitran does it for you.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm text-center">
            <div class="card-body">
              <i class="bi bi-ev-front-fill display-4 text-primary mb-3"></i>
              <h5 class="card-title fw-bold">Ride</h5>
              <p class="card-text">Request a ride service if you don't have a way to get from one place to another, we have very affordable prices.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Llamado a la acción -->
  <section class="bg-light py-5">
    <div class="container text-center">
      <h2 class="fw-bold"> Ready to receive your next package?</h2>
      <p class="mb-4">Vitram makes it easy. Fast, secure, and reliable.</p>
      <a href="/views/contact.php" class="btn btn-primary btn-lg">Contact us now</a>
    </div>
  </section>


  



<!-- Footer -->
<?php
include '../includes/footer.php';
?>