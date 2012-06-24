<?php
/**
 * @package     Joomla
 * @subpackage  Html
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

/**
 * Utility class for rendering tables.
 *
 * @package		Cms.Libraries
 * @subpackage	Html
 * @since		2.5
 */
class JHtmlTable
{
	protected $data = null;
	
	public function __construct($data = null)
	{
		$this->data = $data;
	}
	
	public function render()
	{
		// Get the dispatcher and load the html plugins.
		$dispatcher	= JDispatcher::getInstance();
		JPluginHelper::importPlugin('html');

		$results = $dispatcher->trigger('onHtmlTableBeforeRender', $this->data);
        $options = $this->data['options'];

		$html 	= array();
		$html[]	= '<table ';
        $html[] = (empty($options['id']) ? '' : (' id="' . $options['id'] . '"'));
        $html[] = (empty($options['class']) ? '' : (' class="' . $options['class'] . '"'));
        $html[] = (empty($options['style']) ? '' : (' style="' . $options['style'] . '"'));
        $html[] = '>';
        
        // Render the individual table parts
		$html[] = $this->renderHead();
		$html[] = $this->renderBody();
		$html[] = $this->renderFoot();
        
		$html[]	= '</table>';
		$html	= implode("\n", $html);
		
		$results = $dispatcher->trigger('onHtmlTableAfterRender', $html);
		return $html;
	}
	
	protected function renderHead()
	{
		$html 	= array();
		$html[]	= '<thead>';
		$html[]	= '<tr>';
		foreach($this->data['cols'] as $col) {
			$html[]	= '<th>'.$col.'</th>';
		}
		$html[]	= '</tr>';
		$html[]	= '</thead>';
		return implode("\n", $html);
	}

	protected function renderBody()
	{
		$html 	= array();
		$html[]	= '<tbody>';
		
		foreach($this->data['rows'] as $i => $row) {
			$html[]	= '<tr ';
            $html[] = 'class="row'.($i % 2).'"';
            $html[] = '>';
			foreach($row as $col) {
				$html[]	= '<td>'.$col.'</td>';
			}
			$html[]	= '</tr>';
		}

		$html[]	= '</tbody>';
		return implode("\n", $html);
	}
	
	protected function renderFoot()
	{
		$html 	= array();
		$html[]	= '<tfoot>';
        $html[] = '<td colspan="'.count($this->data['cols']).'">';
        
        // TODO Render pagination if exists
        
        $html[] = '</td>';
		$html[]	= '</tfoot>';
		return implode("\n", $html);
	}
	
	public function setData($data)
	{
		$this->data = $data;
	}
	
	public function getData()
	{
		return $this->data;
	}
}