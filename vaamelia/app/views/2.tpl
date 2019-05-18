{if isset($paths[2])}{include $paths[2]|cat:'/up.tpl'}{/if}
<br><br>
<x id = '3'>
{include '3.tpl'}
</x>
<br><br>
{if isset($paths[2])}{include $paths[2]|cat:'/down.tpl'}{/if}