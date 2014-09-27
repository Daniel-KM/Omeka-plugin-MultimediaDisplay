<?php
/**
 * Multimedia Display configuration form 
 *
 * @package     MultimediaDisplay
 * @copyright   2014 UCSC Library Digital Initiatives
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GNU GPLv3
 */

/**
 * MultimediaDisplay form class
 */
class Mmd_Form_Config extends Omeka_Form
{
    /**
     * Construct the form.
     *
     *@return void
     */
    public function init()
    {
        parent::init();
        $this->_registerElements();
    }

    /**
     * Define the form elements.
     *
     *@return void
     */
    private function _registerElements()
    {  
        

    }


    /**
     *Process the form data and execute actions as necessary
     *
     *@return bool $success true if successful 
     */
    public static function ProcessPost()
    {

    }
}