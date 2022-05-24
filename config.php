<?php
$zone = $_GET['r'] ? $_GET['r'] : 'inicio';
$zones = [
  'inicio' => array(
    'title' => 'Inicio',
    'type' => 'page',
  ),
  'productos' => array(
    'title' => 'Productos',
    'type' => 'page',
  ),
  'comercializacion' => array(
    'title' => 'Comercializacion',
    'type' => 'page',
  ),
  'contacto' => array(
    'title' => 'Contacto',
    'type' => 'page',
  ),
  'soja' => array(
    'title' => 'Soja',
    'img' => 'img/cultivo_soja.jpg',
    'type' => 'page',
  ),
  'trigo' => array(
    'title' => 'Trigo',
    'img' => 'img/cultivo_trigo.jpg',
    'type' => 'page',
  ),
  'maiz' => array(
    'title' => 'Maiz',
    'img' => 'img/cultivo_maiz.jpg',
    'type' => 'page',
  ),
  'girasol' => array(
    'title' => 'Girasol',
    'img' => 'img/cultivo_soja.jpg',
    'type' => 'page',
  ),
  'emergencias' => array(
    'title' => 'Emergencias',
    'img' => 'img/er.jpg', 'img2' => 'img/er2.jpg',
    'type' => 'page',
  ),
  'comercio' => array(
    'title' => 'Comercio',
    'img' => 'img/comercio.jpg',
    'type' => 'page',
  ),
  'insecticidas' => array(
    'title' => 'Insecticidas',
    'type' => 'product',
  ),
  'herbicidas' => array(
    'title' => 'Herbicidas',
    'type' => 'product',
  ),
  'curasemillas' => array(
    'title' => 'Curasemillas',
    'type' => 'product',
  ),
  'funguicidas' => array(
    'title' => 'Funguicidas',
    'type' => 'product',
  ),
  'araendo' => array(
    'title' => 'Araendo',
    'type' => 'spec',
  ),
  'araimidacloprid' => array(
    'title' => 'Araimidacloprid',
    'img' => 'img/araimidacloprid35.jpg', 'img2' => 'img/araimidacloprid.jpg',
    'type' => 'spec',
  ),
  'arapirifos' => array(
    'title' => 'Arapirifos',
    'img' => 'img/arapirifos48.jpg', 'img2' => 'img/arapirifos.jpg',
    'type' => 'spec',
  ),
  'arafenitro' => array(
    'title' => 'Arafenitro',
    'img' => 'img/arafenitro.jpg',
    'type' => 'spec',
  ),
  'aradim' => array(
    'title' => 'ARADim',
    'img' => 'img/aradim.jpg', 'img2' => 'img/aradim_ec.jpg',
    'type' => 'spec',
  ),
  'araphos' => array(
    'title' => 'Araphos',
    'img' => 'img/araphos.jpg', 'img2' => 'img/araphos_ec.jpg',
    'type' => 'spec',
  ),
  'araciper' => array(
    'title' => 'Araciper',
    'img' => 'img/araciper_25.jpg', 'img2' => 'img/araciper25.jpg',
    'type' => 'spec',
  ),
  'aralambda' => array(
    'title' => 'Aralambda',
    'img' => 'img/aralambda5.jpg', 'img2' => 'img/aralambda5_ec.jpg',
    'type' => 'spec',
  ),
  'araglifo' => array(
    'title' => 'Araglifo',
    'img' => 'img/araglifoamonio.jpg', 'img2' => 'img/araglifoamonio.jpg',
    'type' => 'spec',
  ),
  'araglif' => array(
    'title' => 'Araglif',
    'img' => 'img/araglif-48.jpg', 'img2' => 'img/araglif_48.jpg',
    'type' => 'spec',
  ),
  'arasulfuron' => array(
    'title' => 'Arasulfuron',
    'img' => 'img/arasulfuron60.jpg', 'img2' => 'img/arasulfuron.jpg',
    'type' => 'spec',
  ),
  'aramina' => array(
    'title' => 'Aramina',
    'img' => 'img/aramina24d.jpg', 'img2' => 'img/aranmina_20ml.jpg',
    'type' => 'spec',
  ),
  'arazina' => array(
    'title' => 'Arazina',
    'img' => 'img/arazina50.jpg', 'img2' => 'img/arazina_50.jpg',
    'type' => 'spec',
  ),
  'arakamba' => array(
    'title' => 'Arakamba',
    'img' => 'img/arakamba.jpg', 'img2' => 'img/arakamba12.jpg',
    'type' => 'spec',
  ),
  'araclorimuron' => array(
    'title' => 'Araclorimuron',
    'img' => 'img/aramuron.jpg', 'img2' => 'img/aramuron2.jpg',
    'type' => 'spec',
  ),
  'araquat' => array(
    'title' => 'Araquat',
    'img' => 'img/araquat.jpg', 'img2' => 'img/heroquat.jpg',
    'type' => 'spec',
  ),
  'aradinico' => array(
    'title' => 'Aradinico',
    'img' => 'img/aradinicoplus.jpg', 'img2' => 'img/aradinico.jpg',
    'type' => 'spec',
  ),
  'aratircarb' => array(
    'title' => 'Aratircarb',
    'img' => 'img/aratircarb.jpg', 'img2' => 'img/aratircarb2.jpg',
    'type' => 'spec',
  ),
  'araimida' => array(
    'title' => 'Araimida',
    'img' => 'img/araimida70.jpg', 'img2' => 'img/araimida_60.jpg',
    'type' => 'spec',
  ),
  'aracarb' => array(
    'title' => 'Aracarb',
    'img' => 'img/aracarb_plus.jpg', 'img2' => 'img/aracarbplus.jpg',
    'type' => 'spec',
  ),
  'araconazol' => array(
    'title' => 'Araconazol',
    'img' => 'img/araconazol6.jpg', 'img2' => 'img/araconazol_6.jpg',
    'type' => 'spec',
  ),
  'aracarb50' => array(
    'title' => 'Aracarb50',
    'img' => 'img/aracarb_50.jpg', 'img2' => 'img/aracarb-50.jpg',
    'type' => 'spec',
  ),
  'aratiometil' => array(
    'title' => 'Aratiometil',
    'img' => 'img/aratiometil50.jpg', 'img2' => 'img/aratiometil.jpg',
    'type' => 'spec',
  ),
  'aranzeb' => array(
    'title' => 'Aranzeb',
    'img' => 'img/aranzeb.jpg', 'img2' => 'img/aranzeb2.jpg',
    'type' => 'spec',
  ),
  'araconazole' => array(
    'title' => 'Araconazole',
    'img' => 'img/araconazole43.jpg', 'img2' => 'img/araconazole_43.jpg',
    'type' => 'spec',
  ),
];

if (!in_array($zone, array_keys($zones))) {
  header('Location: ');
  $zone = 'inicio';
}

$title = $zones[$zone]['title'];
