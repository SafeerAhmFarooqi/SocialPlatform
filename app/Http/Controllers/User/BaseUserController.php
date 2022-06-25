<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;

class BaseUserController extends BaseController
{
    public function __construct() {
        $this->loadDefaultData();
    }

    protected function loadDefaultData(array $params=[]){
        //$this->headTitle = 'T-Commission';
        //$this->activeApp = config('constants.APPLICATIONS.TCOMMISSION.KEY');

        // calling the parent method to set the global variables
        parent::loadDefaultData($params);
    }
}