<?php
/**
 *
 *
 * @category MyBase
 * @uses Zend_Form_Element_Text
 */
class MyBase_Form_Element_DisplayParam extends Zend_Form_Element_Text
{
    public $helper = 'displayParam';
    public function init()
    {
        // $this->addValidator('EmailAddress')
        //     ->addFilter('StringToLower');
        return parent::init();
    }
}

?>