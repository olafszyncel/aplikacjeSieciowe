{extends file="main.tpl"}

{block name=footer}layout ze strony https://templatemo.com/tm-564-plot-listing{/block}

{block name=title} <h2 class="content-head is-center">Kalkulator kredytowy</h2> {/block}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin" style="color:white">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

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

{include file='messages.tpl'}

{if isset($res->result)}
	<h4>Miesięczna rata wynosi:</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>
</div>

{/block}