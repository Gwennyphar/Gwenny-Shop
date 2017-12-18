<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Shopware_Plugins_Frontend_SisiDemo_Bootstrap extends Shopware_Components_Plugin_Bootstrap {
  // Die Funktion gibt Shopware Informationen über das Plugin zurück
   public function getInfo()
   {
    return array(
      'label' => 'Gewnny Demo',
      'author'=>'Gwennyphar'
    );
   }
  // Die Install Funktion
  public function install()
  {

    // Registrierung des Controller Event
    //in diesen Beispiel heißt der Controller Demo
    $this->subscribeEvent(
      'Enlight_Controller_Dispatcher_ControllerPath_Frontend_Demo',
      'onGetControllerPathFrontend'
    );
    return true;
  }

  // Hier wird der Pfad Registriert beim auslösen des events
  public function onGetControllerPathFrontend(Enlight_Event_EventArgs $arguments)
  {
    return $this->Path() . 'Controllers/frontend/Demo.php';
  }
}
