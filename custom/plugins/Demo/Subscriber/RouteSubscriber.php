<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace GwennysSloganOfTheDay\Subscriber;
use Enlight\Event\SubscriberInterface;
use Shopware\Components\Plugin\ConfigReader;
use GwennysSloganOfTheDay\Components\SloganPrinter;

class RouteSubscriber implements SubscriberInterface
{
   private $pluginDirectory;
   private $sloganPrinter;
   private $config;

   public static function getSubscribedEvents()
   {
       return [
           'Enlight_Controller_Action_PostDispatchSecure_Frontend' => 'onPostDispatch'
       ];
   }

   public function __construct($pluginName, $pluginDirectory, SloganPrinter $sloganPrinter, ConfigReader $configReader)
   {
       $this->pluginDirectory = $pluginDirectory;
       $this->sloganPrinter = $sloganPrinter;

       $this->config = $configReader->getByPluginName($pluginName);
   }

   public function onPostDispatch(\Enlight_Controller_ActionEventArgs $args)
   {
       /** @var \Enlight_Controller_Action $controller */
       $controller = $args->get('subject');
       $view = $controller->View();

       $view->addTemplateDir($this->pluginDirectory . '/Resources/views');

       $view->assign('GwennySloganFontSize', $this->config['GwennySloganFontSize']);
       $view->assign('GwennySloganItalic', $this->config['GwennySloganItalic']);
       $view->assign('GwennySloganContent', $this->config['GwennySloganContent']);

       if (!$this->config['GwennySloganContent']) {
           $view->assign('GwennySloganContent', $this->sloganPrinter->getSlogan());
       }
   }
}

