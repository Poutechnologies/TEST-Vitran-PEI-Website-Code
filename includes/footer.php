<footer style="background-color: #001f3f;" class="text-light py-5">
  <div class="container">
    <div class="row">

      <!-- Logo -->
      <div class="col-md-3 mb-4">
        <img src="/images/logo/mainLogo.png" alt="Company Logo" class="mb-3" style="max-width: 150px;">
        <p>Fast and reliable delivery services tailored to your needs.</p>
      </div>

      <!-- Services -->
      <div class="col-md-3 mb-4">
        <h5 class="mb-3">Services</h5>
        <ul class="list-unstyled">
          <li><a href="/views/services.php" class="text-light text-decoration-none">Same-Day Delivery</a></li>
          <li><a href="/views/services.php" class="text-light text-decoration-none">Scheduled Deliveries</a></li>
          <li><a href="/views/services.php" class="text-light text-decoration-none">Business Solutions</a></li>
          <li><a href="/views/services.php" class="text-light text-decoration-none">Express Delivery</a></li>
        </ul>
      </div>

      <!-- Company -->
      <div class="col-md-3 mb-4">
        <h5 class="mb-3">Company</h5>
        <ul class="list-unstyled">
          <li><a href="/views/about.php" class="text-light text-decoration-none">About Us</a></li>
          <li><a href="/includes/503.php" class="text-light text-decoration-none">Careers</a></li>
          <li><a href="/views/copyright.php" class="text-light text-decoration-none">Copyright</a></li>
          <li><a href="/views/privacy.php" class="text-light text-decoration-none">Privacy Policy</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-md-3 mb-4">
        <h5 class="mb-3">Contact</h5>
        <ul class="list-unstyled">
          <li><i class="fas fa-phone-alt me-2"></i> (902) 916-3226 / (902) 916-4955</li>
          <li><i class="fas fa-envelope me-2"></i> contact@vitranpei.com</li>
          <li><i class="fas fa-map-marker-alt me-2"></i> Charlottetown, PEI, Canada</li>
        </ul>
        <div class="mt-3">
          <!-- <a href="#" class="text-light me-3"><i class="fab fa-facebook fa-lg"></i></a> -->
          <a href="https://www.instagram.com/vitrandeliveryservices?igsh=MTd6bHFkeGdhZzF6OQ==" class="text-light me-3" target="_blank" ><i class="fab fa-instagram fa-lg"></i></a>
          <!-- <a href="#" class="text-light me-3"><i class="fab fa-twitter fa-lg"></i></a>
          <a href="#" class="text-light"><i class="fab fa-linkedin fa-lg"></i></a> -->
        </div>
      </div>

    </div>

    <!-- Divider -->
    <hr class="border-light">

    <!-- Bottom note -->
    <div class="text-center pb-3">
      <small>© 2025 Vitran Delivery Services. All rights reserved.</small>
    </div>

    <!--POU TECH LOGO -->
    <div class="text-end">
      <p class="mb-0 py-0" style="font-size: 0.75rem; color: #6c757d;">
        Made with
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
        </svg>
        by <a class="text-secondary fw-bold" href="https://poutechnologies.com" target="_blank">Pou Technologies</a>.
        Version:  1.0.1
      </p>
    </div>


  </div>
</footer>


<!-- Bundle JS (Bootstrap y Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Otras librerías (como three.js) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<!-- Cookies -->
<script src="../style/js/cookies.js"> </script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);

    // Verifica el estado del formulario
    const formStatus = urlParams.get('form_status');

    switch (formStatus) {
      case 'success':
        Swal.fire({
          title: "Message Sent!",
          text: "Thank you for reaching out. We will get back to you soon.",
          icon: "success"
        });
        break;

      case 'error':
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Something went wrong!",
          footer: '<a href="pages/faqs.html">Why do I have this issue?</a>'
        });
        break;

      case 'missing':
        Swal.fire({
          title: "Are there any fields left unfilled?",
          text: "Please fill in all required fields before submitting.",
          icon: "warning",
          confirmButtonText: "OK"
        });
        break;

      case 'captcha_error':
        Swal.fire({
          title: "Captcha Not Verified",
          text: "Please complete the captcha verification before submitting.",
          icon: "warning",
          confirmButtonText: "OK"
        });
        break;

      default:
        // Maneja estados desconocidos o faltantes (opcional)
        console.warn("No valid form_status provided.");
        break;
    }
  });





// Verifica si el usuario ya cerró el aviso
// function checkTestBanner() {
//     return localStorage.getItem('testBannerClosed') === 'true';
// }

// Muestra el banner si no se ha cerrado
// function showTestBanner() {
//     const banner = document.getElementById('test-banner');
//     if (!checkTestBanner()) {
//         banner.style.display = 'block';
//     }
// }

// Cierra el banner y guarda la preferencia
// document.getElementById('close-test-banner').addEventListener('click', function() {
//     const banner = document.getElementById('test-banner');
//     banner.style.display = 'none';
//     localStorage.setItem('testBannerClosed', 'true');
// });

// Mostrar al cargar la página
// document.addEventListener('DOMContentLoaded', showTestBanner);


</script>


</body>

</html>