<table>
{foreach from=$result item=oneItem}
<tr>
  <td>{$oneItem.title}</td>
  <td>{$oneItem.content}</td>
  <td>{$oneItem.date_created}</td>
  <td><a href="?action=admin&cms_action=edit&id={$oneItem.id}">edit</a></td>
  <td><a href="?action=admin&cms_action=delete&id={$oneItem.id}">delete</a></td>
</tr>
{/foreach}
</table>
