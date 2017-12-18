<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:34:50
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/app.js" */ ?>
<?php /*%%SmartyHeaderCode:15460456955a380a4a87ac60-97371492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624e468392e673616fe62806edfc2a7c3820159c' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/app.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15460456955a380a4a87ac60-97371492',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380a4a887c93_93660567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380a4a887c93_93660567')) {function content_5a380a4a887c93_93660567($_smarty_tpl) {?>/**
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
 * @package    Shopware_Cache
 * @subpackage Cache
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Application - Performance module
 */
//
Ext.define('Shopware.apps.Performance', {

    extend: 'Enlight.app.SubApplication',

    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name:'Shopware.apps.Performance',

    /**
     * Requires controllers for sub-application
     * @array
     */
    controllers: [
        'Main',
        'Settings',
        'Cache',
        'MultiRequest',
        'Direct',
        'Start'
    ],


    /**
     * The detail controller knows all form field sets and the detail window component
     * @array
     */
    views:[
        'main.Window',
        'main.Categories',
        'main.MultiRequestDialog',
        'main.MultiRequestTasks',

        'tabs.cache.Main',
        'tabs.cache.Form',
        'tabs.cache.Info',

        'tabs.start.Main',

        'tabs.settings.Main',
        'tabs.settings.Navigation',
        'tabs.settings.fields.Base',
        'tabs.settings.fields.Home',
        'tabs.settings.fields.Seo',
        'tabs.settings.fields.Topseller',
        'tabs.settings.fields.Search',
        'tabs.settings.fields.HttpCache',
        'tabs.settings.fields.ThemeCache',
        'tabs.settings.fields.Filter',
        'tabs.settings.fields.Categories',
        'tabs.settings.fields.Various',
        'tabs.settings.fields.Customers',

        'tabs.settings.elements.BaseGrid',
        'tabs.settings.elements.CacheTime',
        'tabs.settings.elements.NoCache',
        'tabs.settings.elements.MultiRequestButton'
    ],

    /**
     * All required stores are defined here. The detail store contains all data around the customer.
     * The other shops are global stores which used for combo boxes.
     * @array
     */
    stores:[ 'Info', 'Shop', 'Config' ],

    /**
     * All store's required models. The detail store handles the base, billing, shipping and debit model.
     * @array
     */
    models: [
        'Config',
        'Check',
        'KeyValue',
        'Filter',
        'HttpCache',
        'TopSeller',
        'Seo',
        'Search',
        'Categories',
        'Various',
        'Customer'
    ],

    bulkLoad: true,
    loadPath: '<?php echo '/backend/Performance/load';?>',

    /**
     * This method will be called when all dependencies are solved and
     * all member controllers, models, views and stores are initialized.
     */
    launch: function() {
        var me = this,
            mainController;

        // In order to support clearing the cache directly, we might
        // have to load the 'direct' controller
        if (me.action) {
            me.getController('Direct').directClearCache();
        } else {
            mainController = me.getController('Main');
            if (!mainController.mainWindow) {
                mainController.run();
            }
            return mainController.mainWindow;
        }

    }
});
//

<?php }} ?>