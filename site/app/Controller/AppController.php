<?php


// app/Controller/AppController.php
class AppController extends Controller {
    //...

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'services',
                'action' => 'index'
            ),
            'logoutRedirect' => '/',
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
            'flash' => array(
                'element' => 'alert',
                'key' => 'auth',
                'params' => array(
                    'plugin' => 'BoostCake',
                    'class' => 'alert-error'
                )
            )
        )
    );

    public $layout = 'bootstrap2';

    public $helpers = array(
        'Session',
        'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
        'Form' => array('className' => 'BoostCake.BoostCakeForm'),
        'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
    );


    
    
}