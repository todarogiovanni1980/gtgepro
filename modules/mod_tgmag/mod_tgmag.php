<?php

/**
 * @version     CVS: 1.0.0
 * @package     com_tgmag
 * @subpackage  mod_tgmag
 * @author      Todaro Giovanni - Consiglio Nazionale delle Ricerche -  Istituto per le Tecnologie Didattiche <giovanni.todaro@itd.cnr.it>
 * @copyright   2016 Todaro Giovanni - Consiglio Nazionale delle Ricerche -  Istituto per le Tecnologie Didattiche
 * @license     GNU General Public License versione 2 o successiva; vedi LICENSE.txt
 */
defined('_JEXEC') or die;

// Include the syndicate functions only once
JLoader::register('ModTgmagHelper', dirname(__FILE__) . '/helper.php');

$doc = JFactory::getDocument();

/* */
$doc->addStyleSheet(JURI::base() . '/media/mod_tgmag/css/style.css');

/* */
$doc->addScript(JURI::base() . '/media/mod_tgmag/js/script.js');

require JModuleHelper::getLayoutPath('mod_tgmag', $params->get('content_type', 'blank'));
