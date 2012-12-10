{* Smarty *}
{include file="header.tpl" title="The Smarty Test"}

<h1 align = "center" > <font color = "red"> I want to display some of Smarty's functionality: </font> </h1>
<p>
This demonstrates a Selection list
&nbsp;
<select name=people>
{html_options values=$people output=$people}
</select>
</p>
<p>
An example of a table made using smarty's foreach loop <br>
<table>
{foreach from = $names item = name}
{strip}
   <tr bgcolor="{cycle values="#eeeeee,#dddddd"}">
      <td>{$name}</td>
   </tr>
{/strip}
{/foreach}
</table>
<br>
<table>
{foreach from = $users item = user}
{strip}
   <tr bgcolor="{cycle values="#aaaaaa,#bbbbbb"}">
      <td>{$user.name}</td>
      <td>{$user.phone}</td>
   </tr>
{/strip}
{/foreach}
</table>
</p>
{include file = "footer.tpl"}