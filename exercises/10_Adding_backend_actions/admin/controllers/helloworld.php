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
class HelloWorldControllerHelloWorld extends JControllerForm
{
//class HelloWorldControllerHelloWorld extends JControllerAdmin
//{
//	public function add()
//	{
//		$this->setRedirect(
//			JRoute::_('index.php?option=com_helloworld&view=helloworld&layout=edit&id=0', false),
//			'Redirecting from add.');
//	}

//	public function edit() {
//		$input = JFactory::getApplication()->input;
//		$id = $input->get('id', 0, 'int');
//		if ($id == 0) {
//			$ids = $input->get('cid', array(), 'array');
//			$id = $ids[0];
//		}
//		$this->setRedirect(
//			JRoute::_("index.php?option=com_helloworld&view=helloworld&layout=edit&id=$id", false),
//			'Redirecting from edit.'
//		);
//	}

//	public function save() {
////		get data
//		$input = JFactory::getApplication()->input;
//		$data = $input->get('jform', array(), 'array');
////		get model
//		$model = $this->getModel();
////		save
//		$model->save($data);
////		redirect
//		$this->setRedirect(JRoute::_('index.php?option=com_helloworld', false), "Record saved.");
//	}

//	public function cancel() {
//		$this->setRedirect(JRoute::_('index.php?option=com_helloworld', false), "Operation cancelled.");
//	}
}