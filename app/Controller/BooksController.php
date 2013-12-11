<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 11/12/13
 * Time: 2:10 PM
 * To change this template use File | Settings | File Templates.
 */

class BooksController extends AppController {
   // public $helpers = array ('HTML' , 'Form');
    public function index() {
        $value = $this->Book->find('all');
        $this->set('books', $value);
        //pr($value );
    }
}


