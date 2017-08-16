<?php
/**
 * Gugliotti_News_Block_Adminhtml_Category_Edit_Tabs
 */

/**
 * Class Gugliotti_News_Block_Adminhtml_Category_Edit_Tabs
 *
 * Adminhtml Category Edit.
 *
 * @author Andre Gugliotti <andre@gugliotti.com.br>
 * @version 0.1.0
 * @category Training Modules
 * @package Gugliotti News
 * @license GNU General Public License, version 3
 */
class Gugliotti_News_Block_Adminhtml_Category_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
	/**
	 * Gugliotti_News_Block_Adminhtml_Category_Edit_Tab constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->setId('category_edit_tabs');
		$this->setDestElementId('category_edit_form');
	}

	/**
	 * _beforeToHtml
	 * @return Mage_Core_Block_Abstract
	 */
	protected function _beforeToHtml()
	{
		$this->addTab(
			'category_details',
			array(
				'label' => $this->__('Category Details'),
				'title' => $this->__('Category Details'),
			)
		);
		return parent::_beforeToHtml();
	}
}
