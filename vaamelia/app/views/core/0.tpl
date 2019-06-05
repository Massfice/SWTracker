{if isset($paths[0])}{include $paths[0]|cat:'/up.tpl'}{/if}
<br><br>
<x id = '1'>
{include 'core/1.tpl'}
</x>
<br><br>
{if isset($paths[0])}{include $paths[0]|cat:'/down.tpl'}{/if}