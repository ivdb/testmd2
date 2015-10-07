<form method="post" action="?page=search">
    <input type="text" name="search_string">
    <input type="submit" value="Go!">

</form>

<section>

{include file="pagination.tpl"}
{foreach from=$result item=newsitem}

	<article>

		<h1>{$newsitem.id} {$newsitem.title}</h1>
		<content>{$newsitem.content}</content>
	</article>

{/foreach}

</section>

