<?php


class Router
{
    const DEFAULT_ACTION = 'index';

    /**
     * get action GET param and call same method in object of Main
     */
    static public function init()
    {
        $actionInput = filter_input(INPUT_GET, 'action');
        $action = $actionInput ?? self::DEFAULT_ACTION;
        $action = trim($action);
        $action = strtolower($action);
        $main = new Main();
        if (!method_exists($main, $action)) {
            self::notFound();
        }
        $main->$action();
    }

    /**
     * send status 404
     */
    static public function notFound()
    {
        http_response_code(404);
        $view = new View();
        $view->render('not_found');
        exit();
    }
}