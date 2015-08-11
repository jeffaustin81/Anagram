<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";
    use Symfony\Component\Debug\Debug;
    Debug::enable();
    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_results", function() use ($app) {
        $my_anagram = new Anagram;
        $anagram_array = $my_anagram->findAnagrams($_GET['input_word'], $_GET["check_word"]);
        return $app['twig']->render('view_results.html.twig', array('result' => $anagram_array));
    });

    return $app;

?>
