<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:30:35
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article/model/media.js" */ ?>
<?php /*%%SmartyHeaderCode:15134958005a38094bf3fae7-66338972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52df66865af78f74546c1431db5594ef045bf0c8' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article/model/media.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15134958005a38094bf3fae7-66338972',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38094c071f36_80831141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38094c071f36_80831141')) {function content_5a38094c071f36_80831141($_smarty_tpl) {?>/**
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
 * Shopware Model - Article backend module.
 *
 * @license http://www.shopware.de/license
 * @package Article
 * @subpackage Detail
 */
//
Ext.define('Shopware.apps.Article.model.Media', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'mediaId', type: 'int' },
        { name: 'main', type: 'int', defaultValue: 2 },
        { name: 'position', type: 'int' },
        { name: 'description', type: 'string' },
        { name: 'extension', type: 'string' },
        { name: 'path', type: 'string' },
        {
            name: 'hasConfig',
            type: 'boolean',
            convert: function(value, record) {
                if (record.getMappings() && record.getMappings().getCount() > 0) {
                    return true;
                }
                if (record && record.raw && record.raw.mappings && record.raw.mappings.length > 0) {
                    return true;
                }
                return false;
            }
        },


        {
            name: 'original',
            type: 'string'
        },
        {
            name: 'thumbnail',
            type: 'string'
        }
    ],

    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.MediaMapping', name: 'getMappings', associationKey: 'mappings'}
    ]
});
//

<?php }} ?>