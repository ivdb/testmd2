<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
include('includes/config.php');
// Laad de Smarty bibliotheek in
include('libs/smarty/Smarty.class.php');
// Voer instellingen uit en stel template parser in
include('includes/bootstrap.php');
// Maak de database connectie
include('includes/database.php');

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'Me First And The Gimme Gimmes');
// Toon de template: output html
$templateParser->display('head.tpl');


$page = isset($_GET['page']) ? $_GET['page'] : 'news';

$templateParser->assign('curr_page', $page);
$templateParser->display('header.tpl');



switch ($page) {

    case 'news':
        //lees paginanummer uit
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;

        //calculate maximum number of pages
        include("model/get_nr_newsarticles.php");
        $nr_of_pages = ceil($nr_of_articles / ITEMS_PER_PAGE);

        //assign to smarty
        $templateParser->assign('nr_of_pages', $nr_of_pages);

        // Haal de nieuws artikelen op, geef het result door en display template
        include('model/select_newsarticles.php');
        $templateParser->assign('result', $data);
        $templateParser->assign('curr_nr',$page_nr);
        $templateParser->display('newsarticles.tpl');

        break;
    case 'tour':
        //tour
        break;
    case 'about':

        $templateParser->display('about.tpl');
        //about
        break;
    case 'search':
        $search_string = isset($_POST['search_string']) ? $_POST['search_string']: "";

        //model: get search result
        require 'model/search_newsarticles.php';
        //pass result to smarty
        $templateParser->assign('result',$result);
        //display search template
        $templateParser->display('search_result.tpl');

        break;
    default:

        // Haal de nieuws artikelen op
        include('model/select_newsarticles.php');

        $templateParser->assign('result', $data);
        $templateParser->display('newsarticles.tpl');
}

$templateParser->display('footer.tpl');