<?php

/**
 * Description of loginController
 *
 * @author albert
 */
class loginController extends baseController {
    public $userName, $userPassword, $userAuthenticated;
    public function __construct($registry) {
        parent::__construct($registry);

    }

    public function index() {
        ;
    }
}
