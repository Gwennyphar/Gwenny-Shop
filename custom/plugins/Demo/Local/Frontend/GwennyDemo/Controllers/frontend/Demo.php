<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Shopware_Controllers_Frontend_Demo extends Enlight_Controller_Action {
  // Die init action wird immer vor der eigentlichen Action aufgefrufen
  // Das template Verzeichnis wird registriert
  public function init() {
    $this->View()->addTemplateDir(dirname(__FILE__) . "/../../Views/");
  }

  // Die eigentliche Action lädt lediglich das Template
  public function indexAction()
  {
    $this->View()->loadTemplate("frontend/index.tpl");
  }
}
