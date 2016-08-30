<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Tgmag
 * @author     Todaro Giovanni - Consiglio Nazionale delle Ricerche -  Istituto per le Tecnologie Didattiche <giovanni.todaro@itd.cnr.it>
 * @copyright  2016 Todaro Giovanni - Consiglio Nazionale delle Ricerche -  Istituto per le Tecnologie Didattiche
 * @license    GNU General Public License versione 2 o successiva; vedi LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;

$canEdit = JFactory::getUser()->authorise('core.edit', 'com_tgmag');
if (!$canEdit && JFactory::getUser()->authorise('core.edit.own', 'com_tgmag')) {
	$canEdit = JFactory::getUser()->id == $this->item->created_by;
}
?>


<?php if ( $this->params->get('show_page_heading')!=0) : ?>
    <h1>
Prodotto
    </h1>
<?php endif; ?>

<?php if ($this->item) : 
	
	$app = JFactory::getApplication();
		
	$pathway = $app->getPathway();
	$pathway->addItem($this->item->descrizione, '');
	
?>

<h2><?php echo $this->item->descrizione; ?></h2>

	<div class="item_fields">
		<table class="table">
			<tr>
			<th><?php echo JText::_('COM_TGMAG_FORM_LBL_PRODOTTO_STATE'); ?></th>
			<td>
			<i class="icon-<?php echo ($this->item->state == 1) ? 'publish' : 'unpublish'; ?>"></i></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_TGMAG_FORM_LBL_PRODOTTO_CREATED_BY'); ?></th>
			<td><?php echo $this->item->created_by_name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_TGMAG_FORM_LBL_PRODOTTO_MODIFIED_BY'); ?></th>
			<td><?php echo $this->item->modified_by_name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_TGMAG_FORM_LBL_PRODOTTO_DESCRIZIONE'); ?></th>
			<td><?php echo $this->item->descrizione; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_TGMAG_FORM_LBL_PRODOTTO_QUANTITA'); ?></th>
			<td><?php echo $this->item->quantita; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_TGMAG_FORM_LBL_PRODOTTO_SOGLIA'); ?></th>
			<td><?php echo $this->item->soglia; ?></td>
</tr>

		</table>
	</div>
	<?php if($canEdit && $this->item->checked_out == 0): ?>
		<a class="btn" href="<?php echo JRoute::_('index.php?option=com_tgmag&task=prodotto.edit&id='.$this->item->id); ?>"><?php echo JText::_("COM_TGMAG_EDIT_ITEM"); ?></a>
	<?php endif; ?>
								<?php if(JFactory::getUser()->authorise('core.delete','com_tgmag')):?>
									<a class="btn" href="<?php echo JRoute::_('index.php?option=com_tgmag&task=prodotto.remove&id=' . $this->item->id, false, 2); ?>"><?php echo JText::_("COM_TGMAG_DELETE_ITEM"); ?></a>
								<?php endif; ?>
	<?php
else:
	echo JText::_('COM_TGMAG_ITEM_NOT_LOADED');
endif;
