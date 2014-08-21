<?php

namespace AndyTruong\DrupalOrgScan\Model;

class Account extends AccountBase
{

    public static $_table = 'accounts';

    public function companyWorked()
    {
        return $this->has_many("AndyTruong\\DrupalOrgScan\\Model\\Company");
    }

}
