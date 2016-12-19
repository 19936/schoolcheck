<?php /* Smarty version Smarty-3.1.18, created on 2016-12-07 09:35:34
         compiled from "views\show_newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:728258354e618d13e7-54335434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b86b5785fbc58e09ccbe8e9bd518dfc1be9c151c' => 
    array (
      0 => 'views\\show_newsarticles.tpl',
      1 => 1481099732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '728258354e618d13e7-54335434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58354e618d41d6_65963475',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58354e618d41d6_65963475')) {function content_58354e618d41d6_65963475($_smarty_tpl) {?><table>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<tr>
  <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date_created'];?>
</td>
  <td><a href="?action=admin&cms_action=edit&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">edit</a></td>
  <td><a href="?action=admin&cms_action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">delete</a></td>
</tr>
<?php } ?>
</table>
<?php }} ?>
