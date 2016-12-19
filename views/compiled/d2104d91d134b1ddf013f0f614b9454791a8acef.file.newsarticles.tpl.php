<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 10:24:17
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:406457fb6b5998d675-74452463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1478165055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '406457fb6b5998d675-74452463',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fb6b59a5bd49_65927202',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fb6b59a5bd49_65927202')) {function content_57fb6b59a5bd49_65927202($_smarty_tpl) {?><div id="newsdiv">
  <div class="edtour">
    <img src="ednews.png" alt="" id="ednews" />
  </div>
<div class="pagination">
  <ul>
    <li><a href="?action=home&pagenr=1">1</a></li>
    <li><a href="?action=home&pagenr=2">2</a></li>


  </ul>
</div>



  <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
  <div id="newsdivje"><p id="newstitle"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</p>
    <img src='<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
' id="newsimg">
    <br>
    <p>
      <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>

    </p>
    <p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date_created'];?>
</p>
    <br>

  </div>
  <?php } ?>
  <div class="pagination">
    <ul>
      <li><a href="?action=home&pagenr=1">1</a></li>
      <li><a href="?action=home&pagenr=2">2</a></li>


    </ul>
  </div>
  <br>

</div>
<?php }} ?>
