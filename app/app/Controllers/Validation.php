<?php

namespace App\Controllers;


class Validation extends BaseController {
    public function __construct() {
         $session = session();

    if (!$session->has("user_id")) {
        exit;
        // DO Something 
    }
    }
}
