{extends file='layout.tpl'}
{block name=title}Profil{/block}
{block name=body}
<div id='main'>
<h1>Mon profil</h1>
<p>Contenu du template profil</p>
{foreach from=$profil key=$key item=$value}
    {foreach from=$value key=$champs item=$valeur}
        <h2>{$champs}</h2>
        <p>{$valeur}</p>
    {/foreach}
{/foreach}
</div>
{/block}