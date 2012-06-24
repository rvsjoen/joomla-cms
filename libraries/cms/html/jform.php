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
        
        $fieldsets = $this->form->getFieldsets();
        foreach($fieldsets as $group => $fieldset) {
            $html[] = $this->renderFieldSet($group, $fieldset);
        }
        
		return implode("\n", $html);
	}
	
	public function renderFieldSet($group, $fieldset)
	{
		$html   = array();
        $html[] = '<fieldset id="fieldset-'.$group.'">';
        
        if(isset($fieldset->label)) {
            $html[] = '<legend>'.JText::_($fieldset->label).'</legend>';
        }
        
        $fields = $this->form->getFieldset($group);
        foreach($fields as $field) {
            $html[] = $this->renderField($field);
        }
        
        $html[] = '</fieldset>';

        return implode("\n", $html);
	}
	
	public function renderField($field, $fieldset = null)
	{
        $html   = array();
        $html[] = '<div class="formelm">';
        
        if($fieldset && isset($fieldset->description) && trim($fieldset->description)) {
            $html[] = '<p class="tip">'.JText::_($fieldSet->description).'</p>';
        }
        
        $html[] = $field->label;
        $html[] = $field->input;
        $html[] = '</div>';
        return implode("\n", $html);
	}
}