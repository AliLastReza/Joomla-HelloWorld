<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * General Controller of HelloWorld component
 *
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 * @since       0.0.7
 */
class HelloWorldControllerHelloWorlds extends JControllerAdmin
{
//	class HelloWorldControllerHelloWorlds extends JControllerLegacy
//{
//	public function delete() {
//        $input = JFactory::getApplication()->input;
//        $ids = $input->get('cid', array(), 'array');
//        $idsCount = $input->get('boxchecked', 0, 'int');
//        $model = $this->getModel('HelloWorld', 'HelloWorldModel');
//        $deletedCount = $model->delete($ids);
//		$msg = "$deletedCount Items deleted.";
//        $this->setRedirect(JRoute::_('https://lmssazan.ir/jml/hw/administrator/index.php?option=com_helloworld', false),
//        $msg);
//		return True;
//    }

	public function getModel($name = 'HelloWorld', $prefix = 'HelloWorldModel', $config = array('ignore_request' => true))
	{
		return parent::getModel($name, $prefix, $config);
	}

}