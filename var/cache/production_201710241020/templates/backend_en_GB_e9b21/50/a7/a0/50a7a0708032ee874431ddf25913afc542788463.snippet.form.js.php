<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:48
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/model/form.js" */ ?>
<?php /*%%SmartyHeaderCode:9606913675a37d58c523f28-45063233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50a7a0708032ee874431ddf25913afc542788463' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/model/form.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9606913675a37d58c523f28-45063233',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d58c54b738_14180258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d58c54b738_14180258')) {function content_5a37d58c54b738_14180258($_smarty_tpl) {?>/**
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
 * @package    Shopware_Base
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.Base.model.Form', {
    extend: 'Ext.data.Model',

    alternateClassName: 'Shopware.model.Form',

    fields: [
        //
        { name: 'id', type: 'int', useNull: true },
        { name: 'label', type: 'string' },
        { name: 'name', type: 'string' },
        { name: 'description', type: 'string' }
    ],

    associations: [{
        type: 'hasMany', model: 'Shopware.apps.Base.model.Element',
        name: 'getElements', associationKey: 'elements'
    }]
});
//
<?php }} ?>