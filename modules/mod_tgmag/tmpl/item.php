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
$element = ModTgmagHelper::getItem($params);
?>

<?php if (!empty($element)) : ?>
	<div>
		<?php $fields = get_object_vars($element); ?>
		<?php foreach ($fields as $field_name => $field_value) : ?>
			<?php if (ModTgmagHelper::shouldAppear($field_name)): ?>
				<div class="row">
					<div class="span4">
						<strong><?php echo ModTgmagHelper::renderTranslatableHeader($params, $field_name); ?></strong>
					</div>
					<div
						class="span8"><?php echo ModTgmagHelper::renderElement($params->get('item_table'), $field_name, $field_value); ?></div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
<?php endif;
