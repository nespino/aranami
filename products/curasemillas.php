<?php
$products = [
  array(
    'name' => 'ARADinico Plus - Diniconazole 1,2 % + Tiram 27 %',
    'description' => 'Funguicida terápico para el tratamiento de semillas de trigo de acción por contacto y sistémica para el control de carbones cubiertos, carbón volador, golpe blanco y fusariosis.',
    'transport_sheet' => 'aranami-sa.com.ar/hojas_de_transporte/33.911-Araendo%2035.pdf',
    'security_sheet' => 'hojas_seguridad/aradinico.pdf',
    'view_more' => 'aradinico',
  ),
  array(
    'name' => 'ARATir Carb - Tiram 25% + Carbendazim 25%',
    'description' => 'Funguicida terápico para el tratamiento de semillas de trigo, cebada, soja, alfalfa y arveja entre otros de acción por contacto, sistémica con efecto preventivo y/o curativo. Protege a las semillas interna y externamente de hongos patógenos de las semilla y del suelo.',
    'transport_sheet' => 'hojas_de_transporte/34.203-Aratircab.pdf',
    'security_sheet' => 'hojas_seguridad/araticarb.pdf',
    'view_more' => 'aratircarb',
  ),
  array(
    'name' => 'ARAPack Soja - Inoculante + Aratir Carb ( Tiram 25 % + Carbendazim 25 %)',
    'description' => 'Inoculante y Funguicida terápico para el tratamiento de semillas de soja de acción de contacto, sistémica con efecto preventivo y/o curativo.',
    'transport_sheet' => 'hojas_de_transporte/34.203-Aratircab.pdf',
    'security_sheet' => '#',
    'view_more' => 'dfgdfgdhg',
  ),
  array(
    'name' => 'ARAImida 60/70 - Imidacloprid 60 % / Imidacloprid 70 %',
    'description' => 'Insecticida de la familia de los nicotinoides para el tratamiento de semillas de girasol ,maiz, soja y papa entre otros de acción por contacto y sistémica.',
    'transport_sheet' => 'hojas_de_transporte/35.519-Aramida%2060%20SC.pdf',
    'security_sheet' => 'hojas_seguridad/araimida70wp.pdf',
    'view_more' => 'araimida',
  ),
  array(
    'name' => 'ARACarb Plus - Tiram 10% + Carbendazim 10%',
    'description' => 'Funguicidas terápico para el tratamiento de semillas de trigo, cebada, soja, alfalfa y arveja entre otros de acción por contacto, sistémica con efecto preventivo y/o curativo.',
    'transport_sheet' => 'hojas_de_transporte/33.981-Aracarb%20Plus.pdf',
    'security_sheet' => 'hojas_seguridad/aracarb_plus.pdf',
    'view_more' => 'aracarb',
  ),
  array(
    'name' => 'ARAConazol 6 - Tebuconazole 6 %',
    'description' => 'Funguicida terápico para el tratamiento de semilla de acción sistémica y de contacto en trigo principalmente para el control de Carbones y Fusarium.',
    'transport_sheet' => 'hojas_de_transporte/35.518-Araconazol%206.pdf',
    'security_sheet' => 'hojas_seguridad/araconazol6.pdf',
    'view_more' => 'araconazol',
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