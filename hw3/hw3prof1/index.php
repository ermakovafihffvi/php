<?php

include 'main.php';
require_once 'Twig/Autoloader.php'; //подгружаем twig - в этом фале класс с методами
Twig_Autoloader::register(); //запускаем метод

try {
    //где лежат шаблоны относительно это файла
    $file = new Twig_Loader_Filesystem('../hw3prof1');

    //инициализируем twig
    $twig = new Twig_Environment($file);

    //выбираем шаблон
    $template = $twig->loadTemplate('template.tmpl');

    //передаём в шаблон переменные и выводим итоговую страницу
    $content = $template->render(array(
        'files' => $files,
        'date' => date('Y F j'),
    ));
    echo $content;

} catch (Exeption $e) {
    die ('ERROR: '. $e->getMessage());
}
?>
