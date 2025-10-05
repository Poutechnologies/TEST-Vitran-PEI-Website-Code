<div class="contact-form-wrapper">
  <div class="contact-form p-4 rounded shadow">
    <h2 class="text-center mb-4 text-black">Get in Touch</h2>
    <form action="/includes/process_form.php" method="POST" id="contactForm" enctype="multipart/form-data">
      <div class="row gy-3">
        <div class="col-md-6 col-12">
          <label for="firstName" class="form-label text-black">First Name</label>
          <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>
        <div class="col-md-6 col-12">
          <label for="lastName" class="form-label text-black">Last Name</label>
          <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>
        <div class="col-md-6 col-12">
          <label for="phone" class="form-label text-black">Phone</label>
          <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="col-md-6 col-12">
          <label for="email" class="form-label text-black">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="col-12">
          <label for="service" class="form-label">Service</label>
          <select class="form-select" id="service" name="service" required>
            <option value="" disabled selected>Select a service</option>
            <option value="Moving">Moving</option>
            <option value="Ride">Ride</option>
            <option value="Same day delivery">Same day delivery</option>
            <option value="Delivery for Businesses">Delivery for Businesses</option>
            <option value="Scheduled Shipments">Scheduled Shipments</option>
            <option value="Request a Delivery">Request a Delivery</option>
          </select>
        </div>

        <div id="requestDeliveryFields" class="col-12" style="display: none;">
          <h5 class="mt-3 mb-3 text-black">Delivery Details</h5>
          
          <div class="mb-3">
            <label for="address" class="form-label text-black">Delivery Address</label>
            <input type="text" class="form-control request-delivery-input" id="address" name="address">
          </div>
          
          <div class="mb-3">
            <label for="store" class="form-label text-black">Choose a Store</label>
            <select class="form-select request-delivery-input" id="store" name="store">
              <option value="" disabled selected>Select a store</option>
              <option value="Walmart">Walmart</option>
              <option value="Soriana">Soriana</option>
              <option value="Chedraui">Chedraui</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="flyerDate" class="form-label text-black">Select Flyer Week</label>
            <select class="form-select request-delivery-input" id="flyerDate" name="flyerDate">
              <option value="" disabled selected>Select a week</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="attachments" class="form-label text-black">Upload Image(s)</label>
            <input type="file" class="form-control" id="attachments" name="attachments[]" accept="image/*" multiple>
            <small class="text-muted">Allowed formats: JPG, PNG (max 5MB each).</small>
          </div>
        </div>

        <div class="col-12">
          <label for="message" class="form-label text-black">How can we help you?</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>

        <div class="col-12">
          <div class="form-check">
            <label class="form-check-label" for="acceptTerms">
              <input class="form-check-input" type="checkbox" id="acceptTerms" required>
              I accept the <a href="/privacy.php" target="_blank">terms and conditions</a>
            </label>
          </div>
        </div>

        <div class="col-12">
          <button class="g-recaptcha btn-custom px-4 py-2" 
            data-sitekey="6Lfx478rAAAAABIGgk6KItdz-8WyVACYAA8pXx1Y" 
            data-callback='onSubmit' 
            data-action='submit'>Submit
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
  // Función para manejar la visibilidad y el requisito de los campos
  document.getElementById("service").addEventListener("change", function() {
    const requestFields = document.getElementById("requestDeliveryFields");
    const deliveryInputs = document.querySelectorAll(".request-delivery-input");
    
    if (this.value === "Request a Delivery") {
      // Mostrar los campos de entrega
      requestFields.style.display = "block";
      
      // Hacer que los campos sean obligatorios (excepto el de subir archivos)
      deliveryInputs.forEach(input => {
        input.setAttribute("required", "required");
      });
    } else {
      // Ocultar los campos de entrega
      requestFields.style.display = "none";
      
      // Remover el atributo required para que el formulario se pueda enviar sin ellos
      deliveryInputs.forEach(input => {
        input.removeAttribute("required");
        
        // Opcional: limpiar los valores al ocultar
        if (input.tagName === 'SELECT') {
             input.value = ""; // Vuelve a "Select a store/week"
        } else if (input.type === 'text') {
             input.value = ""; // Limpia la dirección
        }
      });
    }
  });

  // Generar semanas (función existente y que está bien)
  function getNextWeeks(numWeeks) {
    const today = new Date();
    const weeks = [];
    let current = new Date(today);

    // Ajustar al lunes
    current.setDate(current.getDate() - current.getDay() + 1);

    for (let i = 0; i < numWeeks; i++) {
      const start = new Date(current);
      const end = new Date(current);
      end.setDate(end.getDate() + 6);

      const optionText = 
        start.toLocaleDateString('en-US', { month: 'short', day: 'numeric' }) +
        " - " +
        end.toLocaleDateString('en-US', { month: 'short', day: 'numeric' });

      weeks.push({ value: start.toISOString().split('T')[0], text: optionText });
      current.setDate(current.getDate() + 7);
    }
    return weeks;
  }

  const flyerSelect = document.getElementById("flyerDate");
  // Añadir la opción por defecto primero
  const defaultOption = document.createElement("option");
  defaultOption.value = "";
  defaultOption.textContent = "Select a week";
  defaultOption.disabled = true;
  defaultOption.selected = true;
  flyerSelect.appendChild(defaultOption);
    
  getNextWeeks(6).forEach(week => {
    const opt = document.createElement("option");
    opt.value = week.value;
    opt.textContent = week.text;
    flyerSelect.appendChild(opt);
  });
</script>




