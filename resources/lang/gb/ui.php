<?php
$array = [];
if (auth()->user() != null) {
    
    $array['welcome'] = 'Hello ' . auth()->user()->name . ', welcome on our friendly site Presto.it';
    $array['logout']='Logout';
    $array['makeAnnouncement']='Make an announcement';
    
} else {
    $array['welcome'] = "Welcome on our friendly site Presto.it";
    $array['login']="Login";
    $array['register']='Register';
}
$array['allAnnouncements'] = "Here's your announcement";
$array['featured']="This are the lasts announcements inserted in our catalogue! Why don't you try take a look?";
$array['testimonials']='Are you not sure to buy in our site? Look what other users say about us!';
$array['titleAnnouncements']='Announcements';
$array['descAnnouncements']='Search in our catalogoue the announcements that you wanna see!';
$array['goBackButton']='Go back';
$array['navCategories']='Categories';
$array['navAnnouncements']='Annuncouncements';
$array['navRevisor']="Revisor notifications";
$array['navLang']="Language";
$array['navMakeAnnouncement']='Make announcement';
$array['detailsCategory']="Category";
$array['footerWork']='Work with us';
return $array;