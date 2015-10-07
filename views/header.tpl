<header>
    <p> This is my header</p>
    <nav>
        <ul>
            <li {if $curr_page eq news} class="selected"{/if}><a href="?page=news">Nieuws</a></li>
            <li {if $curr_page eq tour} class="selected"{/if}><a href="?page=tour">Tourdata</a></li>
            <li {if $curr_page eq about} class="selected"{/if}><a href="?page=about">About</a></li>
        </ul>

    </nav>
</header>