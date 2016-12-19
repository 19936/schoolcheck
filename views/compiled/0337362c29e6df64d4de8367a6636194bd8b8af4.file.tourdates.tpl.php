<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 12:01:27
         compiled from "views\tourdates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19182580de4cb8caa59-83316608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0337362c29e6df64d4de8367a6636194bd8b8af4' => 
    array (
      0 => 'views\\tourdates.tpl',
      1 => 1478170767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19182580de4cb8caa59-83316608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580de4cb900094_07470813',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580de4cb900094_07470813')) {function content_580de4cb900094_07470813($_smarty_tpl) {?><div id="tourdiv">
  <div class="edtour">
    <img src="EdSheeran-slider.png" alt="" id="edtourdates" />
  </div>


  <br>
    <table>
    <tr>
      <th>Date</th>
      <th>Country</th>
      <th>Venue</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['city'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['venue'];?>
</td>
    </tr>
  <?php } ?>
  </table>



</div>
<?php }} ?>
