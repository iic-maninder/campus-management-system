<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyrigth (c)2006 by Ted Kulp (wishy@cmsmadesimple.org)
   This project's homepage is: http://www.cmsmadesimple.org
*/

class fbTextAreaField extends fbFieldBase {

	function fbTextAreaField(&$form_ptr, &$params)
	{
		$this->fbFieldBase($form_ptr, $params);
		$mod = $form_ptr->module_ptr;
		$this->Type = 'TextAreaField';
		$this->DisplayInForm = true;
		$this->ValidationTypes = array(
            $mod->Lang('validation_none')=>'none',
			$mod->Lang('validation_length')=>'length'
            );

	}

	function GetFieldInput($id, &$params, $returnid)
	{            
		$mod = $this->form_ptr->module_ptr;	
		if ($this->GetOption('html5','0') == '1'){
			$ret = $mod->CreateTextArea(($this->GetOption('wysiwyg','0') == '1'?true:false),$id,$this->Value,
					'fbrp__'.$this->Id,'',$this->GetCSSId(),'','',$this->GetOption('cols','80'),$this->GetOption('rows','15'),
					'', '', ' placeholder="'.$this->GetOption('default').'"');
		} else {
			$ret = $mod->CreateTextArea(($this->GetOption('wysiwyg','0') == '1'?true:false),$id,($this->Value?$this->Value:$this->GetOption('default')),
					'fbrp__'.$this->Id,'',$this->GetCSSId(),'','',$this->GetOption('cols','80'),$this->GetOption('rows','15'));
		}
				   
		if ($this->GetOption('clear_default','0')=='1') {
			$ret .= '<script type="text/javascript">';
			$ret .= "\nvar f = document.getElementById('".$this->GetCSSId()."');\n";
			$ret .= "if (f)\n{\nf.onfocus=function(){\nif (this.value==this.defaultValue) {this.value='';}\n}\n";
			$ret .= "f.onblur=function(){\nif (this.value=='') {this.value=this.defaultValue;}\n}\n";
			$ret .= "}\n;";
			$ret .= "</script>\n";
		}

		return $ret;
   }
	function Validate(){
		$this->validated = true;
		$this->validationErrorText = '';
		$mod = $this->form_ptr->module_ptr;
		$length = $this->GetOption('length','');
		if(is_numeric($length) && $length > 0){
			if((strlen($this->Value)-1) > $length){
				$this->validated = false;
				$this->validationErrorText = $mod->Lang('please_enter_no_longer', $length);
			}
			$this->Value = substr($this->Value, 0, $length+1);
		}
		return array($this->validated, $this->validationErrorText);
	}

	function StatusInfo()
	{
		$mod = $this->form_ptr->module_ptr;
		$ret = '';

		if (strlen($this->ValidationType)>0) {
		
			$ret = array_search($this->ValidationType,$this->ValidationTypes);
		}
		
		if ($this->GetOption('wysiwyg','0') == '1') {
		
			$ret .= ' wysiwyg';
		} else {
		
			$ret .= ' non-wysiwyg';
		}
		
		$ret .=  ', '.$mod->Lang('rows',$this->GetOption('rows','15'));
		$ret .=  ', '.$mod->Lang('cols',$this->GetOption('cols','80'));
		
		return $ret;
	}


	function PrePopulateAdminForm($formDescriptor)
	{
	   $mod = $this->form_ptr->module_ptr;
	   $main = array(
         	array($mod->Lang('title_use_wysiwyg'),$mod->CreateInputHidden($formDescriptor, 'fbrp_opt_wysiwyg','0').
						$mod->CreateInputCheckbox($formDescriptor, 'fbrp_opt_wysiwyg','1',$this->GetOption('wysiwyg','0'))),
			array($mod->Lang('title_textarea_rows'),$mod->CreateInputText($formDescriptor, 'fbrp_opt_rows',$this->GetOption('rows','15'),5,5)),
			array($mod->Lang('title_textarea_cols'),$mod->CreateInputText($formDescriptor, 'fbrp_opt_cols',$this->GetOption('cols','80'),5,5)),
			array($mod->Lang('title_textarea_length'),$mod->CreateInputText($formDescriptor, 'fbrp_opt_length',$this->GetOption('length',''), 5, 5))
            );
	   $adv = array(array($mod->Lang('title_field_default_value'),
				  $mod->CreateTextArea(false,
								   $formDescriptor, $this->GetOption('default'),
								   'fbrp_opt_default'
				               )),        );
		
	   $adv = array(
			array($mod->Lang('title_field_default_value'),$mod->CreateTextArea(false,$formDescriptor, $this->GetOption('default'),'fbrp_opt_default')),
			array($mod->Lang('title_html5'),$mod->CreateInputHidden($formDescriptor,'fbrp_opt_html5','0').
						$mod->CreateInputCheckbox($formDescriptor, 'fbrp_opt_html5','1',$this->GetOption('html5','0'))),
			array($mod->Lang('title_clear_default'),$mod->CreateInputHidden($formDescriptor,'fbrp_opt_clear_default','0').
						$mod->CreateInputCheckbox($formDescriptor, 'fbrp_opt_clear_default','1',$this->GetOption('clear_default','0')).'<br />'.$mod->Lang('title_clear_default_help'))
		);

        return array('main'=>$main,'adv'=>$adv);
	}

	function PostPopulateAdminForm(&$mainArray, &$advArray)
	{
		$mod = $this->form_ptr->module_ptr;
		
		// hide "javascript"
		$this->RemoveAdminField($advArray, $mod->Lang('title_field_javascript'));
	}


}

?>
