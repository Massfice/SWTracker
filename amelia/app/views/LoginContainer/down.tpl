<center>
{if $msgs->isError()}<b>### BŁĘDY ###</b><br>{/if}
{foreach $msgs->getMessages() as $msg}
{if $msg->type == 2}{$msg->text}<br>{/if}
{/foreach}
</center>