<?php
$products = [
  array(
    'name' => 'ARAGlifoAmonio - Glifosato 40,5 %',
    'description' => 'Herbicida para el control postemergente de malezas gramíneas, ciperáceas y de hoja ancha en pre-siembra de cultivos con Labranza Convencional y con Siembra Directa.',
    'transport_sheet' => 'hojas_de_transporte/hoja-transporte-araglifoamonio.pdf',
    'security_sheet' => 'hojas_seguridad/hoja-seguridad-araglifoamonio-.pdf',
    'view_more' => 'araglifo',
  ),
  array(
    'name' => 'ARAGlif 48 - Glifosato 48 %',
    'description' => 'Herbicida de postemergencia no selectivo y de acción sistémica que controla malezas anuales y perennes.',
    'transport_sheet' => 'hojas_de_transporte/34.107-Araglif%2048.pdf',
    'security_sheet' => 'hojas_seguridad/arglif48.pdf',
    'view_more' => 'araglif',
  ),
  array(
    'name' => 'ARASulfurón 60 - Metsulfurón 60 %',
    'description' => 'Herbicida de postemergencia que controla malezas de hoja ancha en el cultivo de trigo.',
    'transport_sheet' => 'hojas_de_transporte/34.032-Ara%20Sulfuron%2060.pdf',
    'security_sheet' => 'hojas_seguridad/arasulfuron.pdf',
    'view_more' => 'arasulfuron',
  ),
  array(
    'name' => 'ARAMina 2,4 d 60 - 2,4 D sal amina 60 %',
    'description' => 'Herbicida de acción sistémica, de baja volatilidad que controla malezas de hoja ancha en ciertos cultivos.',
    'transport_sheet' => 'hojas_de_transporte/35.113-Aramina%202,4D%2060.pdf',
    'security_sheet' => 'hojas_seguridad/amina_2,4.pdf',
    'view_more' => 'aramina',
  ),
  array(
    'name' => 'ARAZina 50 - Atrazina 50 %',
    'description' => 'Herbicida selectivo que controla malezas de hoja ancha y gramíneas anuales en cultivos como maíz, sorgo granífero y caña de azúcar.',
    'transport_sheet' => 'hojas_de_transporte/34.031-Atrazina-50.pdf',
    'security_sheet' => 'hojas_seguridad/arazina50.pdf',
    'view_more' => 'arazina',
  ),
  array(
    'name' => 'ARAKamba 57,8 - Dicamba 57,8 %',
    'description' => 'Herbicida de postemergencia de acción sistémica y selectivo que controla malezas de hoja ancha en cultivos como trigo, caña de azúcar, maíz, sorgo granífero y pasturas gramíneas.',
    'transport_sheet' => 'hojas_de_transporte/35.567-Arakamba%2058.pdf',
    'security_sheet' => 'hojas_seguridad/arakamba.pdf',
    'view_more' => 'arakamba',
  ),
  array(
    'name' => 'ARAClorimurón 25 - Clorimurón 25 %',
    'description' => 'Herbicida de postemergencia de acción sistémica para el control de malezas de hoja ancha en pasturas y en el cultivo de soja.',
    'transport_sheet' => 'hojas_de_transporte/36.138-Araclorimuron%2025.pdf',
    'security_sheet' => 'hojas_seguridad/aramuron25.pdf',
    'view_more' => 'araclorimuron',
  ),
  array(
    'name' => 'Araquat - Paraquat 27,6 %',
    'description' => 'Desecante y Herbicida no selectivo de amplio aspectro y de acción de contacto en diferentes cultivos.',
    'transport_sheet' => 'hojas_de_transporte/35.740-Araquat.pdf',
    'security_sheet' => 'hojas_de_transporte/35.740-Araquat.pdf',
    'view_more' => 'araquat',
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