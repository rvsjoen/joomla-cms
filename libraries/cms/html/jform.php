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
 * Utility class for rendering forms.
 *
 * @package		Cms.Libraries
 * @subpackage	Html
 * @since		2.5
 */
class JHtmlForm
{
	protected $form = null;
	
	public function __construct($form = null)
	{
		$this->form = $form;
	}
	
	public function setForm($form)
	{
		$this->form = $form;
	}
	
	public function getForm()
	{
		return $this->form;
	}
	
	public function render()
	{
		$html = array();
		return implode("\n", $html);
	}
	
	public function renderFieldSet($fieldset)
	{
		
	}
	
	public function renderField($field)
	{
		
	}
}