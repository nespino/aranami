<h2>Funguicidas</h2> <br>

<?php
$products = [
  array(
    'name' => 'ARACarb 50 - Carbendazim 50%',
    'description' => 'Funguicida de amplio espectro de acción sistémica y efecto preventivo y/o curativo.',
    'transport_sheet' => 'hojas_de_transporte/33.882-Aracarb%2050.pdf',
    'security_sheet' => 'hojas_seguridad/aracarb-50.pdf',
    'view_more' => 'aracarb50',
  ),
  array(
    'name' => 'ARATiometil 50 - Metil Tlofanato 50 %',
    'description' => 'Funguicida foliar de acción sistémica, preventivo y/o curativo en cultivos como soja (EFC), trigo, poroto, duraznero, maní, manzano, citrus entre otros.',
    'transport_sheet' => 'hojas_de_transporte/34.925-Aratiometil%2050.pdf',
    'security_sheet' => 'hojas_seguridad/aratiometil.pdf',
    'view_more' => 'aratiometil',
  ),
  array(
    'name' => 'ARAConazole 25 - Tebuconazole 25 % (Producto en proceso de registración)',
    'description' => 'Funguicida foliar de acción sistémica, preventiva, curativa y erradicante.
    Controla Golpe Blanco, Manchas, Roya y Oídio.',
    'transport_sheet' => 'hojas_de_transporte/35.870-Aratebuco%2025.pdf',
    'security_sheet' => '',
    'view_more' => 'dfgdfgdhg',
  ),
  array(
    'name' => 'ARANzeb - Mancozeb 80 %',
    'description' => 'Funguicida foliar de amplio espectro de acción por contacto y preventiva.',
    'transport_sheet' => 'hojas_de_transporte/34.920-Aranzeb.pdf',
    'security_sheet' => 'hojas_seguridad/aranzeb.pdf',
    'view_more' => 'aranzeb',
  ),
  array(
    'name' => 'ARAConazole 43 SC - Tebuconazole 43 %',
    'description' => 'Funguicida foliar de acción sistémica, preventiva, curativa y erradicante.
    Controla Golpe Blanco, Manchas, Roya y Oídio.',
    'transport_sheet' => 'hojas_de_transporte/34.414-Araconazol%2043%20SC.pdf',
    'security_sheet' => 'araconazol_43.pdf',
    'view_more' => 'araconazole',
  ),
]

?>

<?php foreach($products as $product): ?>

<div class="product">
  <h3><?php echo $product['name']; ?></h3>
  <p><?php echo $product['description']; ?></p>
  <a href="<?php echo $product['transport_sheet']; ?>" target="_blank">Hoja de transporte</a> <br>
  <a href="<?php echo $product['security_sheet']; ?>" target="_blank">Hoja de seguridad</a> <br>
  <a href="<?php echo $product['view_more']; ?>" target="_blank">Ver más</a> <br>
</div>

<?php endforeach;?>