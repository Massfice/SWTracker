<center>Created by Iwaru.</center><br>
{if isset($templater_babcia) && is_array($templater_babcia) && count($templater_babcia) > 0}
{foreach $templater_babcia as $b}
{$b}<br>
{/foreach}
{else}
Nie ma.
{/if}