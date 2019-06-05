{if isset($paths[1])}{include $paths[1]|cat:'/up.tpl'}{/if}
<br><br>
<x id = '2'>
{include 'core/2.tpl'}
</x>
<br><br>
{if isset($paths[1])}{include $paths[1]|cat:'/down.tpl'}{/if}