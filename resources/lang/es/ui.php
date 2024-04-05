<?php
$array = [];
if (auth()->user() != null) {
    
    $array['welcome'] = 'Hola ' . auth()->user()->name . ', bienvenido a nuestro amigable sitio web Presto.it';
    $array['logout']='Cerrar sesión';
    $array['makeAnnouncement']='Crear un anuncio';
    
} else {
    $array['welcome'] = "Bienvenido a nuestro amigable sitio web Presto.it";
    $array['login']="Acceso";
    $array['register']='Iniciar sesión';
}
$array['allAnnouncements'] = "Aquí están tus anuncios.";
$array['featured']='¡Estas son las últimas novedades incluidas en nuestro catálogo! ¿Por qué no intentas echar un vistazo?';
$array['testimonials']='¿No estás seguro de estar listo para comprar en nuestro sitio? ¡Mira lo que dicen los comentarios de los usuarios!';
$array['titleAnnouncements']='Anuncios';
$array['descAnnouncements']='¡Busca aquí en nuestro catálogo los anuncios que te gustaría ver!';
$array['goBackButton']='Regresar';
$array['navCategories']='Categorías';
$array['navAnnouncements']='Anuncios';
$array['navRevisor']="Notificaciones del revisor";
$array['navLang']="Lengua";
$array['navMakeAnnouncement']='Crear anuncio';
$array['detailsCategory']="Categoría";
$array['footerWork']='Trabaja con nosotros';
return $array;