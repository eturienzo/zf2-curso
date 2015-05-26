<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 26/05/2015
 * Time: 10:32
 */

namespace Bookmark\Form;

use Zend\Form\Form;

class Bookmark extends Form
{
    function __construct($name = null)
    {
        parent::__construct();
        $this->setName('Bookmark');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'creationAt',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'modifiedAt',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'url',
            'type' => 'Url',
            'attributes' => array(
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'title',
            'type' => 'Text',
            'attributes' => array(
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'description',
            'type' => 'Text',
            'attributes' => array(
                'required' => 'required',
            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'id' => 'submitbutton',
            ),
        ));
    }


}