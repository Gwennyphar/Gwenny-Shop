<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:30:28
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/application/Shopware.helper.BatchRequests.js" */ ?>
<?php /*%%SmartyHeaderCode:18010768025a380944716f78-03733603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fef3ee800e2d5464763a08d1a746c821d1337f6' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/application/Shopware.helper.BatchRequests.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18010768025a380944716f78-03733603',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38094472c7a7_36415078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38094472c7a7_36415078')) {function content_5a38094472c7a7_36415078($_smarty_tpl) {?>
Ext.define('Shopware.helper.BatchRequests', {

    start: function(requests, callback) {
        this.prepareRequest(
            requests.shift(),
            requests,
            callback
        );
    },

    prepareRequest: function(request, requests, callback) {
        this.send(request, requests, callback);
    },

    /**
     * Executes the next iteration of the provided request
     * @param request
     * @param requests
     * @param callback
     */
    send: function(request, requests, callback) {
        var me = this;

        if (!request.params.hasOwnProperty('iteration')) {
            request.params.iteration = 0;
        }
        request.params.iteration++;

        Ext.Ajax.request({
            url: request.url,
            params: request.params,
            success: function(operation) {
                me.handleResponse(request, operation, requests, callback);
            }
        });
    },

    /**
     * Called after each request iteration
     * @param request
     * @param operation
     * @param requests
     */
    handleResponse: function(request, operation, requests, callback) {
        var me = this;
        var response = Ext.decode(operation.responseText);

        me.updateProgressBar(request, response);

        if (me.cancelProcess) {
            me.canceled();
            return true;
        }

        if (response.hasOwnProperty('params')) {
            Ext.Object.merge(request.params, response.params);
        }

        if (response.finish == false) {
            return me.send(request, requests, callback);
        }

        if (requests.length <= 0) {
            return me.finish(requests, callback);
        }

        request = requests.shift();
        return me.prepareRequest(request, requests, callback);
    },

    updateProgressBar: function(request, response) { },

    /**
     * called when all requests finished
     */
    finish: function(requests, callback) {
        if (Ext.isFunction(callback)) {
            Ext.callback(callback);
        }
    },

    canceled: function() { },

    cancel: function() {
        this.cancelProcess = true;
    }
});<?php }} ?>