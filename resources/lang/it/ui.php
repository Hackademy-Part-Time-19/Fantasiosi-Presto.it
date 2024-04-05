<?php
$array = [];
if (auth()->user() != null) {
    
    $array['welcome'] = 'Ciao ' . auth()->user()->name . ', benvenuto sul nostro amichevole sito Presto.it';
    $array['logout']='Logout';
    $array['makeAnnouncement']='Crea un annuncio';
    
} else {
    $array['welcome'] = "Benvenuti sul nostro amichevole sito Presto.it";
    $array['login']="Accedi";
    $array['register']='Registrati';
}
$array['allAnnouncements'] = "Ecco i tuoi annunci";
$array['featured']='Questi sono gli ultimi annunci inseriti nel nostro catalogo! Perchè non provi a dare un occhiata?';
$array['testimonials']='Non sei sicuro di essere pronto per acquistare sul nostro sito? Guarda che cosa hanno da dire le recensioni fatte dagli utenti!';
$array['titleAnnouncements']='Annunci';
$array['descAnnouncements']='Cerca qui nel nostro catalogo gli annunci che vorresti vedere!';
$array['goBackButton']='Torna indietro';
$array['navCategories']='Categorie';
$array['navAnnouncements']='Annunci';
$array['navRevisor']="Notifiche Revisore";
$array['navLang']="Lingua";
$array['navMakeAnnouncement']='Crea Annuncio';
$array['detailsCategory']="Categoria";
$array['footerWork']='Lavora con noi';
return $array;
