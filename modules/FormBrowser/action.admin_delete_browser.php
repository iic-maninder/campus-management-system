<?php
/* 
   FormBrowser. Copyright (c) 2005-2006 Samuel Goldstein <sjg@cmsmodules.com>
   More info at http://dev.cmsmadesimple.org/projects/formbuilder
   
   A Module for CMS Made Simple, Copyright (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
  This project's homepage is: http://www.cmsmadesimple.org
*/
if (!isset($gCms)) exit;
if (! $this->CheckAccess()) exit;

        $aebrowser = new fbrBrowser($this, $params, true);
        $aebrowser->Delete();

        $params['fbr_pmessage'] = $this->Lang('browser_deleted');
        $this->DoAction('defaultadmin', $id, $params);
?>