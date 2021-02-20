<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['pweb'] = 'welcome/pweb';
$route['web'] = 'about/web';
$route['biodata'] = 'about/biodata';
$route['lists'] = 'about/list';
$route['tentangkharisma'] = 'about/kharisma';

$route['pallubasa'] = 'resep/pallubasa';
$route['ayamlodho'] = 'resep/ayamlodho';
$route['pempek'] = 'resep/pempek';
$route['seblak'] = 'resep/seblak';
$route['tahutek'] = 'resep/tahutek';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
