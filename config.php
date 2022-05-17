<?php
$zone = $_GET['r'] ? $_GET['r'] : 'inicio';
$zones = [
  'inicio' => array(
    'title' => 'Inicio',
    'main_nav' => true,
  ),
  'productos' => array(
    'title' => 'Productos',
    'main_nav' => true,
  ),
  'comercializacion' => array(
    'title' => 'Comercialización',
    'main_nav' => true,
  ),
  'contacto' => array(
    'title' => 'Contacto',
    'main_nav' => true,
  ),
  'soja' => array(
    'title' => 'Soja',
    'img' => 'img/cultivo_soja.jpg',
  ),
  'trigo' => array(
    'title' => 'Trigo',
    'img' => 'img/cultivo_trigo.jpg',
  ),
  'maiz' => array(
    'title' => 'Maiz',
    'img' => 'img/cultivo_maiz.jpg',
  ),
  'girasol' => array(
    'title' => 'Girasol',
    'img' => 'img/cultivo_soja.jpg',
  ),
  'emergencias' => array(
    'title' => 'Emergencias',
    'img' => 'img/er.jpg', 'img2' => 'img/er2.jpg',
  ),
  'comercio' => array(
    'title' => 'Comercio',
  ),
];

if (!in_array($zone, array_keys($zones))) {
  header('Location: ');
  $zone = 'inicio';
}

$title = $zones[$zone]['title'];
