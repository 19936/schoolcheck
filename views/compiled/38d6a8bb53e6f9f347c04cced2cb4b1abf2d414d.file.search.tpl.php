<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 22:46:46
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322405819ea32548106-57326312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1478170962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322405819ea32548106-57326312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5819ea32621865_65062654',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5819ea32621865_65062654')) {function content_5819ea32621865_65062654($_smarty_tpl) {?><div id="searchdiv">
  <div class="edtour">
    <img src="searchbanner.png" alt="" id="searchbanner" />
  </div>

<div id="searchdiv2">
  <br>
  <input type="text" name="users" placeholder="Search by country.." onkeyup="showUser(this.value)">
  <br>
  <br>
</div>

<div id="txtHint"><b></b></div>
</div>
<?php }} ?>
