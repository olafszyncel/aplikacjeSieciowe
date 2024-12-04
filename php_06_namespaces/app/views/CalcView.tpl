{extends file="main.tpl"}

{block name=footer}layout ze strony https://templatemo.com/tm-564-plot-listing{/block}

{block name=title} <h2 class="content-head is-center">Kalkulator kredytowy</h2> {/block}
{block name=content}



<div class="pure-g">

<div class="container mt-4"> 
    <form action="{$conf->action_root}calcCompute" method="post" class="p-4 border rounded shadow">
        <div class="mb-3 row">
            <label for="kwota" class="col-sm-4 col-form-label text-end">Kwota kredytu</label>
            <div class="col-sm-8">
                <input id="kwota" type="text" placeholder="..." name="kwota" value="{$form->kwota}" class="form-control bg-light">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="liczba_lat" class="col-sm-4 col-form-label text-end">Liczba lat</label>
            <div class="col-sm-8">
                <input id="liczba_lat" type="text" placeholder="..." name="liczba_lat" value="{$form->liczba_lat}" class="form-control bg-light">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="oprocentowanie" class="col-sm-4 col-form-label text-end">Oprocentowanie</label>
            <div class="col-sm-8">
                <input id="oprocentowanie" type="text" placeholder="..." name="oprocentowanie" value="{$form->oprocentowanie}" class="form-control bg-light">
            </div>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Oblicz</button>
        </div>
    </form>
</div>





<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>
</div>

{/block}