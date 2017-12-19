<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Shopware\Themes\BlogExtension;
use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme {
  protected $extend = 'Responsive';
  protected $name = "Blog-Erweiterung";
  protected $description = "";
  protected $author = "gwenny";
  protected $license = "MIT";
  protected $javascript = [
    'src/js/blog.js'
  ];
}

