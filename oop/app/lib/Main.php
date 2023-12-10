<?php


class Main
{
    /**
     * @var View
     */
    private View $view;

    /**
     * Main constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * index page
     */
    public function index(){
        $this->view->render('index');
    }

    /**
     * about page
     */
    public function about(){
        $this->view->render('about');
    }
}