<?php 
	ini_set("display_errors", 1);
	error_reporting(E_ALL);

	require_once("vendor/autoload.php");

	use Rain\Tpl;
	// config
	$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/",
	);

	Tpl::configure( $config );
	// Add PathReplace plugin (necessary to load the CSS with path replace)
	Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );
	// create the Tpl object
	$tpl = new Tpl;
	// assign a variable
	$tpl->assign( "name", "Gabi" );
	$tpl->assign( "version", PHP_VERSION );

	// draw the template
	// renderiza o template
	//pede o nome do arquivo, nao precisa passar a extensao pq ja eh padrao
	//a ultima linha tem que ser o draw
	$tpl->draw( "index" );


?> 
