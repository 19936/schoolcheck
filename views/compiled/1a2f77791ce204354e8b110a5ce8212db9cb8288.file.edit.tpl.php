<?php /* Smarty version Smarty-3.1.18, created on 2016-12-09 14:17:39
         compiled from "views\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162085847c9d847a031-04751013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2f77791ce204354e8b110a5ce8212db9cb8288' => 
    array (
      0 => 'views\\edit.tpl',
      1 => 1481289201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162085847c9d847a031-04751013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5847c9d84b2fb7_73969758',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847c9d84b2fb7_73969758')) {function content_5847c9d84b2fb7_73969758($_smarty_tpl) {?><form action="" method="post">
  <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['title'];?>
">
  <input type="text" name="content" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['content'];?>
">
  <input type="submit" name="save_update" value="save">
</form>
<?php }} ?>
