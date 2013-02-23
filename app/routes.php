<?php

use Nette\Application\Routers\Route,
    Nette\Application\Routers\RouteList;

$router = new RouteList;

// ================= "funkcni" a prevedene stranky ================
$router[] = new Route('index.php', 'Homepage:default', Route::ONE_WAY);
$router[] = new Route('novinky', 'Homepage:news');
$router[] = new Route('news', 'Homepage:news', Route::ONE_WAY);

// souteze
$router[] = new Route('souteze', 'Homepage:competition');
$router[] = new Route('competitions.aspx', 'Homepage:competition', Route::ONE_WAY);
$router[] = new Route('competitions/<name>.aspx', 'Homepage:competition', Route::ONE_WAY);

$router[] = new Route('kontakt', 'Homepage:contact');
$router[] = new Route('contact.aspx', 'Homepage:contact', Route::ONE_WAY);

// ================= rozpracovane a nedodelane ================
// about
$router[] = new Route('o-projektu', 'Homepage:about');
$router[] = new Route('about.aspx', 'Homepage:about', Route::ONE_WAY);
$router[] = new Route('about/history.aspx', 'Homepage:about', Route::ONE_WAY);
$router[] = new Route('about/seminars.aspx', 'Homepage:about', Route::ONE_WAY); // stary obsah - spis na Junior Camp?
$router[] = new Route('download.aspx', 'Homepage:about', Route::ONE_WAY); // asi dame casem ke stazeni loga (pripadne na 'media'?)

// konference
$router[] = new Route('konference', 'Homepage:conference');
$router[] = new Route('conference.aspx', 'Homepage:conference', Route::ONE_WAY);

// pro media
$router[] = new Route('pro-media', 'Homepage:media');
$router[] = new Route('mediaroom.aspx', 'Homepage:media', Route::ONE_WAY);
$router[] = new Route('mediaroom/<name>.aspx', 'Homepage:media', Route::ONE_WAY); // how-to-promote, wrote-about-us, press-releases

// pribehy vitezu / success stories
$router[] = new Route('pribehy-vitezu', 'Homepage:successStories');

// Předchozí ročníky
$router[] = new Route('predchozi-rocniky', 'Homepage:previous');
$router[] = new Route('winners.aspx', 'Homepage:previous', Route::ONE_WAY);
$router[] = new Route('winners/year/<year>.aspx', 'Homepage:previous', Route::ONE_WAY);
$router[] = new Route('winners/competition/<competition>.aspx', 'Homepage:previous', Route::ONE_WAY);

// Výzva
$router[] = new Route('hledame-dalsiho-viteze', 'Homepage:appeal', Route::ONE_WAY);
$router[] = new Route('hledame-viteze', 'Homepage:appeal');

// ostatni -> da se flash message, ze jsme ji smazali
$router[] = new Route('<action>[.aspx]', 'Homepage:default'); 

return $router;