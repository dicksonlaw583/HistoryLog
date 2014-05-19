<?php
/**
 * HistoryLog
 *
 * @copyright Copyright 2014 UCSC Library Digital Initiatives
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
 */

/**
 * The HistoryLog log controller class.
 *
 * @package HistoryLog
 */
class HistoryLog_LogController extends Omeka_Controller_AbstractActionController
{    
 

  public function showAction()
  {
    $this->view->itemID = $this->_getParam('item');
  }

}
