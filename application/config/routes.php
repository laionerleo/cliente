<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**/

$l                                        = '^(en|es|de|it|po)/';
$i                                        = '^(en|es|de|it|po)';

/**/

$route[$l.'personas']                 		= 'Persona';

$route['default_controller']                = 'Welcome';
$route[$l.'login']                 		    = 'Welcome/login';
$route[$l.'subir-archivo']                  = 'Welcome/subir';
$route[$l.'cargar']                          = 'Welcome/cargar';

$route[$l.'descargar']                          = 'Welcome/download';

$route[$l.'bajar-archivo']                  = 'Welcome/bajar';
$route[$l.'login']                 		    = 'Welcome/login';


/*****dashboard ******/
$route[$l.'dash_v2']                 		= 'Dashboard/dashv2';
$route[$l.'dash_eco']                 		= 'Dashboard/ecommerce';
$route[$l.'dash_analytics']                 		= 'Dashboard/analytics';
$route[$l.'dash_team']                 		= 'Dashboard/team';



/*****dashboard ******/

/*****tables ******/
$route[$l.'table_basic']                 		= 'Tables/basictables';
$route[$l.'table_bootstrap']                 		= 'Tables/bootstraptables';
$route[$l.'table_responsive']                 		= 'Tables/responsivetables';
$route[$l.'table_jsgrid']                 		= 'Tables/jsgrid';
$route[$l.'table_footable']                 		= 'Tables/footable';
$route[$l.'table_datatables']                 		= 'Tables/datatables';
$route[$l.'table_jqtabledit']                 		= 'Tables/jquerytabledit';
$route[$l.'table_table-dragger']                 		= 'Tables/tabledragger';
$route[$l.'table_editablestables']                 		= 'Tables/editablestables';
$route[$l.'table_floatthead']                 		= 'Tables/floatthead';

/*****tables ******/

/*****forms ******/
$route[$l.'form_advanced']                 		= 'Forms/advancedelements';
$route[$l.'form_general']                 		= 'Forms/generalelements';
$route[$l.'form_layouts']                 		= 'Forms/formlayout';
$route[$l.'form_masks']                 		= 'Forms/formmask';
$route[$l.'form_material']                 		= 'Forms/materialelements';
$route[$l.'form_validation']                 		= 'Forms/formvalidation';
$route[$l.'form_wizard']                 		= 'Forms/formwizard';
$route[$l.'form_imagecropping']                 		= 'Forms/imagecropping';
$route[$l.'form_fileuploads']                 		= 'Forms/fileuploads';
$route[$l.'form_editor_summernote']                 		= 'Forms/editors_summernote';
$route[$l.'form_editor_markdown']                 		= 'Forms/editors_markdown';
$route[$l.'form_editor_aceeditor']                 		= 'Forms/editors_aceeditor';


/*****forms ******/

$route[$l.'(.+)$']                        = "$2";
$route[$i.'$']                            = $route['default_controller'];


/**/

$route['translate_uri_dashes']            = TRUE;
$route['404_override']                    = 'Welcome/error404';
$route['403_override']                    = 'Welcome/error403';
$route['503_override']                    = 'Welcome/error503';
$route['504_override']                    = 'Welcome/error504';
/**/


?>