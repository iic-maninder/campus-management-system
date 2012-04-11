<?php
/* 
   FormBuilder. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/
require_once(dirname(__FILE__).'/DispositionEmailBase.class.php');

class fbDispositionFromEmailAddressField extends fbDispositionEmailBase {

	function fbDispositionFromEmailAddressField(&$form_ptr, &$params)
	{
      $this->fbDispositionEmailBase($form_ptr, $params);
      $mod = $form_ptr->module_ptr;
		$this->Type = 'DispositionFromEmailAddressField';
      $this->IsDisposition = true;
		$this->DisplayInForm = true;
		$this->ValidationTypes = array(
			$mod->Lang('validation_none')=>'none',
            $mod->Lang('validation_email_address')=>'email',
            );
	$this->modifiesOtherFields = true;
	$this->NonRequirableField = false;	
	}

	function GetFieldInput($id, &$params, $returnid)
	{
		$mod = $this->form_ptr->module_ptr;
		$js = $this->GetOption('javascript','');
		$retstr = '<input type="text" name="'.$id.'fbrp__'.$this->Id.'[]" '.
			$this->GetCSSIdTag('_1').' value="'.htmlspecialchars($this->Value[0], ENT_QUOTES).
			'" size="25" maxlength="128" '.$js.'/>';
 		if ($this->GetOption('send_user_copy','n') == 'c')
			{
			$retstr .= $mod->CreateInputCheckbox($id, 'fbrp__'.$this->Id.'[]', 1,
					0,$this->GetCSSIdTag('_2'),'email');
			$retstr .= '<label for="'.$this->GetCSSId('_2').'" class="label">'.$this->GetOption('send_user_label',
				$mod->Lang('title_send_me_a_copy')).'</label>';
			}
		return $retstr;
	}

	function GetCSSId($suffix='')
	{
		$alias = $this->GetAlias();
		if (empty($alias))
			{
			$cssid = 'fbrp__'.$this->Id;
			}
		else
			{
			$cssid = $alias;
			}

		if (empty($suffix))
			{
			$cssid .= '_1';
			}
		else
			{
			$cssid .= $suffix;
			}
		return $cssid;
	}

   function HasValue($deny_blank_responses=false)
   {
   return ($this->Value[0] !== false && !empty($this->Value[0]));
   }

  	function GetValue()
  	{
    	return $this->Value[0];
  	}

   function SetValue($valStr)
   {
      if (! is_array($valStr))
         {
         $this->Value = array($valStr);
         }
      else
         {
         $this->Value = $valStr;
         }
   }

	function GetHumanReadableValue($as_string=true)
	{
		if (is_array($this->Value))
			{
			return $this->Value[0];
			}
		else
			{
			return $this->Value;
			}
	}

	function DisposeForm()
	{
      if ($this->HasValue() != false && 
			(
				$this->GetOption('send_user_copy','n') == 'a'
				||
				($this->GetOption('send_user_copy','n') == 'c' && isset($this->Value[1]) && $this->Value[1] == 1)
			)
		 )
			{
			return $this->SendForm($this->Value[0],$this->GetOption('email_subject'));
			}
	  else
		{
        return array(true,'');
        }
	}


	function StatusInfo()
	{
		return $this->TemplateStatus();
	}

	function PrePopulateAdminForm($formDescriptor)
	{
		$mod = $this->form_ptr->module_ptr;
		list($main,$adv) = $this->PrePopulateAdminFormBase($formDescriptor);
		$opts = array($mod->Lang('option_never')=>'n',$mod->Lang('option_user_choice')=>'c',$mod->Lang('option_always')=>'a');
		array_push($main,array($mod->Lang('title_send_usercopy'),
			$mod->CreateInputDropdown($formDescriptor, 'fbrp_opt_send_user_copy', $opts, -1, $this->GetOption('send_user_copy','n'))));
		array_push($main,array($mod->Lang('title_send_usercopy_label'),
			$mod->CreateInputText($formDescriptor, 'fbrp_opt_send_user_label', $this->GetOption('send_user_label',
				$mod->Lang('title_send_me_a_copy')),25,125)));
		$hopts = array($mod->Lang('option_from')=>'f',$mod->Lang('option_reply')=>'r',$mod->Lang('option_both')=>'b');
		array_push($main,array($mod->Lang('title_headers_to_modify'),
			$mod->CreateInputDropdown($formDescriptor, 'fbrp_opt_headers_to_modify', $hopts, -1, $this->GetOption('headers_to_modify','f'))));
		return array('main'=>$main,'adv'=>$adv);
	}

	function PostPopulateAdminForm(&$mainArray, &$advArray)
	{
		$mod = $this->form_ptr->module_ptr;
		$this->RemoveAdminField($mainArray, $mod->Lang('title_email_from_address'));
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
				if ($others[$i]->IsDisposition() &&
               is_subclass_of($others[$i],'fbDispositionEmailBase'))
					{
					if ($htm == 'f' || $htm == 'b')
                  {
					    $others[$i]->SetOption('email_from_address',$this->Value[0]);
					   }
               if ($htm == 'r' || $htm == 'b')
                  {
					    $others[$i]->SetOption('email_reply_to_address',$this->Value[0]);
                  }
					}
				}
			}
	}

	function Validate()
	{

  		$this->validated = true;
  		$this->validationErrorText = '';
		$result = true;
		$message = '';
		$mod = $this->form_ptr->module_ptr;
		if ($this->ValidationType != 'none')
			{
		      if ($this->Value !== false &&
		            ! preg_match(($mod->GetPreference('relaxed_email_regex','0')==0?$mod->email_regex:$mod->email_regex_relaxed), $this->Value[0]))
		         {
		         $this->validated = false;
		         $this->validationErrorText = $mod->Lang('please_enter_an_email',$this->Name);
		         }
			}
		return array($this->validated, $this->validationErrorText);
	}
}

?>
