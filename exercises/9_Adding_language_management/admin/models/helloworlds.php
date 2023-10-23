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

class HelloWorldModelHelloWorlds extends JModelList
{
    protected function getListQuery() {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->select('*')
                ->from($db->quoteName('#__helloworld'));

        return $query;
    }
}