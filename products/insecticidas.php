<?php

$products = [
  array(
    'name' => 'ARAEndo 35 - Endosulfán 35 %',
    'description' => 'Insecticida que controla una amplia gama de insectos chupadores y masticadores. Actuá por contacto e ingestión y de acuerdo a la temperatura también por inhalación.',
    'transport_sheet' => 'hojas_de_transporte/33.911-Araendo%2035.pdf',
    'security_sheet' => 'hojas_seguridad/araendo35.pdf',
    'view_more' => 'araendo',
  ),
  array(
    'name' => 'ARAImidacloprid 35 - Imidacloprid 35 %',
    'description' => 'Insecticida de la familia de los neonicotinoides de acción sistémica, contacto y con efecto prolongado.
    Recomendado para los cultivos de papa, tomate, pimientos, tabaco, cerezo y, ciruelo entre otros.',
    'transport_sheet' => 'hojas_de_transporte/35.301-Araimidacloprid%2035.pdf',
    'security_sheet' => 'hojas_seguridad/Imidacloprid_35_SC.pdf',
    'view_more' => 'araimidacloprid',
  ),
  array(
    'name' => 'ARAPirifós 48 - Clorpirifós 48 %',
    'description' => 'Insecticida de amplio espectro que controla orugas, gusanos y pulgones. Actúa por contacto, ingestión e inhalación.',
    'transport_sheet' => 'hojas_de_transporte/34.177-Arapirifos%2048.pdf',
    'security_sheet' => 'hojas_seguridad/arapirifos.pdf',
    'view_more' => 'arapirifos',
  ),
  array(
    'name' => 'ARAFenitro 100 - Fenitrotión 100 %',
    'description' => 'Insecticida de gran eficacia para el control de insectos como chinches, pulgones, cochinillas y tucuras entre otros. Actúa por contacto e ingestión',
    'transport_sheet' => 'hojas_de_transporte/34.054-Arafenitro%20100.pdf',
    'security_sheet' => 'hojas_seguridad/arafenitro100.pdf',
    'view_more' => 'arafenitro',
  ),
  array(
    'name' => 'ARADim EC - Dimetoato 37,6 %',
    'description' => 'Insecticida-Aficida de acción por contacto, ingestión y sistémica. Recomendado principalmente para el control de pulgones y cochinillas.',
    'transport_sheet' => 'hojas_de_transporte/34.558-Aradim%20EC.pdf',
    'security_sheet' => 'hojas_seguridad/aradim_37,6.pdf',
    'view_more' => 'aradim',
  ),
  array(
    'name' => 'ARAPhos 60 - Metamidofós 60 %',
    'description' => 'Insecticida-Acaricida órgano-fosforado de gran espectro de control de acción por contacto y vía sistémica.',
    'transport_sheet' => 'hojas_de_transporte/33.951-Araphos%2060.pdf',
    'security_sheet' => 'hojas_seguridad/araphos.pdf',
    'view_more' => 'araphos',
  ),
  array(
    'name' => 'ARACiper 25 - Cipermetrina 25 %',
    'description' => 'Insecticida piretroide que actúa sobre los órdenes lepidópteros y hemípteros (orugas, isocas, chinches ) entre otros. Actúa por contacto e ingestión.',
    'transport_sheet' => 'hojas_de_transporte/33.910-Araciper%2025.pdf',
    'security_sheet' => 'hojas_seguridad/araciper.pdf',
    'view_more' => 'araciper',
  ),
  array(
    'name' => 'Aralambda 5 - Lambdacialotrina 5 %',
    'description' => 'Insecticida piretroide de amplio espectro de acción que actúa por contacto e ingestión. Gran poder de volteo y residualidad.',
    'transport_sheet' => 'hojas_de_transporte/36.110-Aralambda%205.pdf',
    'security_sheet' => 'hojas_seguridad/Lambda_Cyhalothrin_5_EC.pdf',
    'view_more' => 'aralambda',
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