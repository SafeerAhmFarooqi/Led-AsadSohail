<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\AdminController;

class BaseClientController extends AdminController
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