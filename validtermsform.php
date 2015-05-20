<?php
/**
 * @copyright  Copyright (C) 2012 Mark Dexter & Louis Landry. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

class plgUserValidTermsForm extends JPlugin
{
    function onContentPrepareForm($form, $data)
    {
         
        // Si no estamos en el formulario de registro, que ignore este metodo
        if($form->getname() != 'com_users.registration'){
            return;
        }

        // Carga de los archivos de idioma
        $this->loadLanguage();

        // Carga del archivo XML que contiene el formulario personalizado
        $form->loadFile(dirname(__FILE__).'/forms/form.xml');


    }
}