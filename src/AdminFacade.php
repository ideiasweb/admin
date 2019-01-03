<?php

namespace Ideiasweb\Admin\Facades;

use Illuminate\Support\Facades\Facade;

class AdminFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Ideiasweb.Admin.Helper';
    }

}
