<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

class HelloWorldModelHelloWorld extends JModelAdmin
{
	public function getTable($type = 'HelloWorld', $prefix = 'HelloWorldTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

//    class HelloWorldModelHelloWorld extends JModelLegacy
//{
//    public function delete($ids) {
//        $table = $this->getTable('helloworld', 'helloworldtable');
//        $deletedCount = 0;
//        foreach ($ids as $id) {
//            if ($table->delete($id)) {
//                $deletedCount++;
//            }
//        }
//        return $deletedCount;
//    }

//class HelloWorldModelHelloWorld extends JModelAdmin
//{
//	public function getTable($name = 'HelloWorld', $prefix = 'HelloWorldTable', $options = array())
//	{
//		return parent::getTable($name, $prefix, $options);
//	}

//class HelloWorldModelHelloWorld extends JModelForm
//{
//	public function getItem() {
//		$input = JFactory::getApplication()->input;
//		$id = $input->get('id', 0, 'int');
//		$table = $this->getTable('HelloWorld', 'HelloWorldTable');
//		$table->load($id);
//		return $table;
//	}

	public function getForm($data = array(), $loadData = true)
	{
		$form = $this->loadForm(
			'com_helloworld.helloworld',
			'helloworld',
			array(
				'control' => 'jform',
				'load_data' => $loadData
			)
		);

		if (empty($form)) {
			return false;
		}

		return $form;
	}

	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return  mixed  The data for the form.
	 *
	 * @since   1.6
	 */
	protected function loadFormData()
	{
		$data = JFactory::getApplication()->getUserState(
			'com_helloworld.edit.helloworld.data',
			array()
		);
		if (empty($data)) {
			$data = $this->getItem();
		}
		return $data;
	}


//	class HelloWorldModelHelloWorld extends JModelForm
//{
//	public function save($data) {
////		get table
//		$table = $this->getTable('HelloWorld', 'HelloWorldTable');
////		bind
//		$table->bind($data);
////		store
//		$table->store();
//	}
}