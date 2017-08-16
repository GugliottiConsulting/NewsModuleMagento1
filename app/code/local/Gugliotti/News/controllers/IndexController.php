<?php
/**
 * Gugliotti_News_Controller_IndexController
 */

/**
 * Class Gugliotti_News_Controller_IndexController
 *
 * Main controller for news.
 *
 * @author Andre Gugliotti <andre@gugliotti.com.br>
 * @version 0.1.0
 * @category Training Modules
 * @package Gugliotti News
 * @license GNU General Public License, version 3
 */
class Gugliotti_News_IndexController extends Mage_Core_Controller_Front_Action
{
	/**
	 * indexAction
	 */
	public function indexAction()
	{
		$this->_forward('view', 'category');
	}
}
