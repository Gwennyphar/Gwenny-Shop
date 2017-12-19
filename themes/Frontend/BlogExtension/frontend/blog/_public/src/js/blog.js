/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


;(function ($, window) {
    'use strict';
    $.plugin('shopBlog', {
        defaults: {
            url: ''
        },
        init: function () {
            var me = this;
            me.applyDataAttributes();
            me.registerEvents();
        },
        registerEvents: function () {
            var me = this;
            me._on(me.$el, 'click', $.proxy(me.onReadMoreClick, me));
        },
        onReadMoreClick: function (event) {
           var me = this,
                   isMobile = ['s', 'm'].indexOf(StateManager.getCurrentState()) > -1;
           if (!isMobile) {
               return;
           }
           event.preventDefault();
           $.modal.open(me.opts.url, {
               mode: 'iframe',
               sizing: 'fixed'
           });
       },
       destroy: function () {
           var me = this;
           me.off(me.eventSuffix);
           me._destroy();
       }
   });
   })(jQuery, window);
   $('.blog--box-readmore').shopBlog();

