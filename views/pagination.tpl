<ul id="pagination">
    {for $i = 1 to $nr_of_pages}
        <li{if $curr_nr == $i} class="pag_selected"{/if}><a href="?page=news&page_nr={$i}">{$i}</a></li>
    {/for}
</ul>
