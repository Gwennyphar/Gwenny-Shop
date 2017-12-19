<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace GwenQuestions;

class GwenQuestions extends \Shopware\Components\Plugin {
  public static function getSubscribedEvents() {
    return [
      'Enlight_Controller_Dispatcher_ControllerPath_Frontend_'
      . 'Questions' => 'onGetControllerPath'
      ];
  }
  public function onGetControllerPath() {
//    return $this->getPath() . '/Controllers/Frontend/GwenQuestions.php'; 
    $this->container->get('Template')->addTemplateDir( $this->getPath() . '/Resources/Views/');
    return $this->getPath() . '/Controllers/Frontend/GwenQuestions.php';
  }
}