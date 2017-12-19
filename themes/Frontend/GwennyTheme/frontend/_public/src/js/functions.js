/**
 * Author: gwenny
 * @param {type} param
 */
;(function ($, window) {
    'use strict';
    $.plugin('show_modalbox', {
        defaults: {
            ordernumber: ""
        },
        init: function () {
            // initalize plugin
            var me = this;
            me.applyDataAttributes();
            me.registerEvents();
        },
        registerEvents: function () {
            // registry events
            var me = this;
            me._on(me.$el, 'click', $.proxy(me.onButtonClick, me));
        },
        onButtonClick: function (event) {
            // Callback-Funktion »click«-Event
            var me = this,
            path = csrfConfig.basePath,
            ordernumber = me.opts.ordernumber,
            quickView = '/detail/productQuickView/ordernumber/';
            if (!ordernumber) {
                return;
            }
            event.preventDefault();
            $.modal.open(path + quickView + ordernumber, {
                mode: 'ajax',
                sizing: 'content'
            });
        },
        destroy: function () {
            // destructor destroy event
            var me = this;
            me.off(me.eventSuffix);
            me._destroy();
        }
    });
})(jQuery, window);
$('.product--box.box--slider').show_modalbox();


