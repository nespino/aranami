<?php
$zone = $_GET['r'] ? $_GET['r'] : 'inicio';
$zones = [
  'inicio' => array(
    'title' => 'Inicio',
  ),
  'productos' => array(
    'title' => 'Productos',
  ),
  'comercializacion' => array(
    'title' => 'Comercialización',
  ),
  'contacto' => array(
    'title' => 'Contacto',
  ),
  'soja' => array(
    'title' => 'Soja',
    'img' => 'img/cultivo_soja.jpg',
  ),
  
];

if (!in_array($zone, array_keys($zones))) {
  header('Location: ');
  $zone = 'inicio';
}

$title = $zones[$zone]['title'];