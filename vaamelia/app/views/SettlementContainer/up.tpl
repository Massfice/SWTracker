<center>
<a href = 'javascript:void(0);' onclick ='go("authors_part_show")'>Autorzy Postów</a> | 
<a href = 'javascript:void(0);' onclick ='go("positions_part_show")'>Pozycje Rozliczenia</a> 
<br><br>

{if isset($settlement_created_message)}
	{include 'minis/settlement_created.tpl'}
{/if}
</center>