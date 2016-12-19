<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 11:56:44
         compiled from "views\audio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2632258135540568d64-50897792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa3c67a9b70dd374211bee8426e689e67d1355f3' => 
    array (
      0 => 'views\\audio.tpl',
      1 => 1478170601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2632258135540568d64-50897792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5813554064dd46_68345160',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813554064dd46_68345160')) {function content_5813554064dd46_68345160($_smarty_tpl) {?><div id="audiodiv">
  <div class="edtour">
    <img src="xalbum.png" alt="" id="edtouraudio" />
  </div>

<section>
<br>
  <table id="audiotable">
  <tr>
    <th>Name</th>
    <th>Listen</th>

  </tr>
  <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name2'];?>
</td>
    <td>
      <audio controls>

        <source src="audio/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name'];?>
" type="audio/mpeg">
        </audio>
</td>

  </tr>
<?php } ?>
</table>
</section>
</div>
<?php }} ?>
