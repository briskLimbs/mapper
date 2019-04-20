<?php
  
require 'functions.php';
$addons = new Addons();

define('MAPPER_CORE_PATH', __DIR__);
define('MAPPER_CORE_NAME', basename(MAPPER_CORE_PATH));
$pages = MAPPER_CORE_NAME . '|pages';
$menu = array(
  'developer_tools' => array(
    'display_name' => 'Mapper',
    'sub' => array(
      'Manual Generate' => $pages . '|manual_generate.php'
    )
  )
);

$addons->addMenu($menu);