<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/

class fbFromEmailAddressField extends fbFieldBase {

	function fbFromEmailAddressField(&$form_ptr, &$params)
	{
        $this->fbFieldBase($form_ptr, $params);
        $mod = $form_ptr->module_ptr;
		$this->Type = 'FromEmailAddressField';
		$this->DisplayInForm = true;
		$this->ValidationTypes = array(
            $mod->Lang('validation_email_address')=>'email',
            );
        $this->ValidationType = 'email';
	   $this->modifiesOtherFields = true;
	}

	function GetFieldInput($id, &$params, $returnid)
	{
		$mod = $this->form_ptr->module_ptr;
		$js = $this->GetOption('javascript','');
		
		return $mod->fbCreateInputText($id, 'fbrp__'.$this->Id,
			htmlspecialchars($this->Value, ENT_QUOTES),
           25,128,$js.$this->GetCSSIdTag(),'text');
	}


	function PrePopulateAdminForm($formDescriptor)
	{
		$mod = $this->form_ptr->module_ptr;
      $main = array();
      $adv = array();
		$hopts = array($mod->Lang('option_from')=>'f',$mod->Lang('option_reply')=>'r',$mod->Lang('option_both')=>'b');
		array_push($main,array($mod->Lang('title_headers_to_modify'),
			$mod->CreateInputDropdown($formDescriptor, 'fbrp_opt_headers_to_modify', $hopts, -1, $this->GetOption('headers_to_modify','f'))));

		return array('main'=>$main,'adv'=>$adv);
	}

	
	function ModifyOtherFields()
	{
		$mod = $this->form_ptr->module_ptr;
		$others = $this->form_ptr->GetFields();
		$htm = $this->GetOption('headers_to_modify','f');

		if ($this->Value !== false)
			{
			for($i=0;$i<count($others);$i++)
				{
				$replVal = '';
				if ($others[$i]->IsDisposition()
               && is_subclass_of($others[$i],'fbDispositionEmailBase'))
					{
					if ($htm == 'f' || $htm == 'b')
                  {
					    $others[$i]->SetOption('email_from_address',$this->Value);
					   }
               if ($htm == 'r' || $htm == 'b')
                  {
					    $others[$i]->SetOption('email_reply_to_address',$this->Value);
                  }
					}
				}
			}
	}

	function StatusInfo()
	{
		return '';
	}

	function Validate()
	{
		$this->validated = true;
		$this->validationErrorText = '';
		$mod = $this->form_ptr->module_ptr;
		switch ($this->ValidationType)
		  {
		  	   case 'email':
                  if ($this->Value !== false &&
                      ! preg_match(($mod->GetPreference('relaxed_email_regex','0')==0?$mod->email_regex:$mod->email_regex_relaxed), $this->Value))
                    {
                    $this->validated = false;
                    $this->validationErrorText = $mod->Lang('please_enter_an_email',$this->Name);
                    }
		  	       break;
		  }
		return array($this->validated, $this->validationErrorText);
	}
}

?>
