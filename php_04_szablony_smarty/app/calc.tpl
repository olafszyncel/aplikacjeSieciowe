{extends file="../templates/main.tpl"}

{block name=footer}layout ze strony https://templatemo.com/tm-564-plot-listing{/block}

{block name=title} <h2 class="content-head is-center">Kalkulator kredytowy</h2> {/block}
{block name=content}



<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="{$app_url}/app/calc.php" method="post">
		<fieldset>

			<label for="kwota">Kwota kredytu</label>
			<input id="kwota" type="text" placeholder="..." name="kwota" value="{$form['kwota']}">
					
			<label for="liczba_lat">Liczba lat</label>
			<input id="liczba_lat" type="text" placeholder="..." name="liczba_lat" value="{$form['liczba_lat']}">

			<label for="oprocentowanie">oprocentowanie</label>
			<input id="oprocentowanie" type="text" placeholder="..." name="oprocentowanie" value="{$form['oprocentowanie']}">

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result)}
	<h4>Miesięczna rata</h4>
	<p class="res">
	{$result}
	</p>
{/if}

</div>
</div>

{/block}