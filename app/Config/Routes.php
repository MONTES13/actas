<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->setAutoRoute(true);
$routes->set404Override();



$routes->add('login','Login::index');
$routes->post('auth','Login::auth');
$routes->add('logout','Login::logout');

$routes->add('test','Test::index');

$routes->get('/', 'Home::index');


//rutas js

$routes->add('js_tabla_comunion','Js::js_tabla_comunion');
$routes->post('tabla_comunion_procesar','Js::tabla_comunion_procesar');

$routes->add('js_tabla_bautismo','Js::js_tabla_bautismo');
$routes->post('procesar_tabla_bautismo','Js::procesar_tabla_bautismo');


$routes->add('js_tabla_matrimonio','Js::js_tabla_matrimonio');
$routes->post('procesar_tabla_matrimonio','Js::procesar_tabla_matrimonio');






$routes->group('/',['filter'=>'Auth'],function($routes){
    
    $routes->get('comunion','Comunion::index');
    $routes->get('agregar_registro_comunion','Comunion::agregar_registro_comunion');
    $routes->post('save_comunion','Comunion::save_comunion');
    $routes->add('detalle_comunion/(:any)','Comunion::detalle_comunion/$1');
    $routes->add('acta_comunion/(:any)','Comunion::acta_comunion/$1');
    $routes->add('pdf_comunion/(:any)','Comunion::pdf_comunion/$1');

    $routes->add('bautismo','Bautismo::index');
    $routes->add('agregar_registro_bautismo','Bautismo::agregar_registro_bautismo');
    $routes->post('save_bautismo','Bautismo::save');
    $routes->add('acta_bautismo/(:any)','Bautismo::acta_bautismo/$1');
    $routes->add('pdf_bautismo/(:any)','Bautismo::pdf_bautismo/$1');
    $routes->add('detalle_bautismo/(:any)','Bautismo::detalle_bautismo/$1');

    $routes->add('confirmacion','Confirmacion::index');
    $routes->add('agregar_registro_confirmacion','Confirmacion::agregar_registro_confirmacion');
    $routes->post('save_confirmacion','Confirmacion::save_confirmacion');
    $routes->add('acta_confirmacion/(:any)','Confirmacion::acta_confirmacion/$1');
    $routes->add('pdf_confirmacion/(:any)','Confirmacion::pdf_confirmacion/$1');
    $routes->add('detalle_confirmacion/(:any)','Confirmacion::detalle_confirmacion/$1');
    $routes->add('js_tabla_confirmacion','Js::js_tabla_confirmacion');
    $routes->post('tabla_confirmacion_procesar','Js::tabla_confirmacion_procesar');


    $routes->add('matrimonio','Matrimonio::index');
    $routes->add('agregar_registro_matrimonio','Matrimonio::agregar_registro_matrimonio');
    $routes->post('save_matrimonio','Matrimonio::save_matrimonio');
    $routes->add('acta_matrimonio/(:any)','Matrimonio::acta_matrimonio/$1');
    $routes->add('pdf_matrimonio/(:any)','Matrimonio::pdf_matrimonio/$1');
    $routes->add('detalle_matrimonio/(:any)','Matrimonio::detalle_matrimonio/$1');
    

});

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
