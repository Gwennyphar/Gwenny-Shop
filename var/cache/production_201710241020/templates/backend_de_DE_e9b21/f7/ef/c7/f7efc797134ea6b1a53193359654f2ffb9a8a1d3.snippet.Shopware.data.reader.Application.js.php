<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:30:25
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/component/Shopware.data.reader.Application.js" */ ?>
<?php /*%%SmartyHeaderCode:16705237225a380941e572d7-80101343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7efc797134ea6b1a53193359654f2ffb9a8a1d3' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/component/Shopware.data.reader.Application.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16705237225a380941e572d7-80101343',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380941e5dfd0_40325333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380941e5dfd0_40325333')) {function content_5a380941e5dfd0_40325333($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Base
 * @subpackage Component
 * @copyright  Copyright (c) shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author     shopware AG
 */

Ext.define('Shopware.data.reader.Application', {
    extend: 'Ext.data.reader.Json',
    alternateClassName: 'Ext.data.ApplicationReader',
    alias : 'reader.application',

    extractData : function(root) {
        var me = this,
            records = [],
            Model   = me.model,
            length  = root.length,
            modelIteration = null,
            convertedValues, node, record, i;

        if (!root.length && Ext.isObject(root)) {
            root = [root];
            length = 1;
        }

        modelIteration = me.model;

        for (i = 0; i < length; i++) {
            node = root[i];

            if (!node.isModel) {
                //SW FIX
                    //internal reference of convertRecordData function lost
                    //reproducible if you load a one to many association and additionally a many to one association
                    me.setModel(modelIteration, true);
                //fix end

                record = new Model(undefined, me.getId(node), node, convertedValues = {});

                record.phantom = false;

                me.convertRecordData(convertedValues, node, record);

                records.push(record);

                if (me.implicitIncludes) {
                    me.readAssociated(record, node);
                }
            } else {
                records.push(node);
            }
        }
        return records;
    }
});


<?php }} ?>