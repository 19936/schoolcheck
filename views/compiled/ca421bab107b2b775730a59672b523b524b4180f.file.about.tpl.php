<?php /* Smarty version Smarty-3.1.18, created on 2016-10-24 12:35:03
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2907757fe30717d5ae7-39564544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1477305298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2907757fe30717d5ae7-39564544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe30719a6ac6_75261427',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe30719a6ac6_75261427')) {function content_57fe30719a6ac6_75261427($_smarty_tpl) {?><section>
  

  <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
  <article><h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['titel'];?>
</h1>

    <content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['aboutinfo'];?>
</content>
    <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['contact'];?>
</p>
  </article>
  <?php } ?>
</section>
<?php }} ?>
