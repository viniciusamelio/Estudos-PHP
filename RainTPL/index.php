<?php
require_once('vendor/autoload.php');
// namespace
use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "",
    "cache_dir"     => "cache/"
);
Tpl::configure( $config );

$tpl = new Tpl;

$tpl->assign( "name", "Vinicius Amélio" );
$tpl->draw( "index" );