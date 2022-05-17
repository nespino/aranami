<h2>Contacto</h2>

<h4>Nuestros Datos:</h4>
<ul>
  <li>Tel/Fax: +5411-4342-0119/0260</li>
  <li>Alsina 943, Piso 6, oficina 607 - C1088AAA</li>
  <li>Buenos Aires, Argentina</li>
</ul>

<form class="row g-3">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Nombre</label>
    <input type="text" class="form-control is-valid" id="validationServer01" value="" required>
    <div class="valid-feedback">
      Correcto!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Apellido</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="" required>
    <div class="valid-feedback">
      Correcto!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">Empresa</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Ingrese su empresa.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">Ciudad</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Ingrese su ciudad.
    </div>
  </div>
  <form class="was-validated">
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Consulta</label>
    <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Ingrese su consulta" required></textarea>
    <div class="invalid-feedback">
      Ingrese su consulta.
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">enviar</button>
  </div>
</form>