<?php
$names = array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');

$filteredNames = array_filter($names, function($name) {
  return substr($name, 0, 1) == 'M';
});

foreach ($filteredNames as $name) {
  echo $name . " ";
}