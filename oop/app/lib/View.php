<?php


class View
{
    const VIEW_DIR = '../app/views/';

    const TEMPLATE_DIR = 'templates';

    const PAGE_DIR = 'pages';
    /**
     * @var string
     */
    private string $template = 'main';
    /**
     * @var string
     */
    private string $page;

    /**
     * View constructor.
     * @param string $page
     * @param string|null $template
     */
    public function __construct(string $template = null)
    {
        if ($template !== null) {
            $this->template = $template;
        }
    }

    /**
     * rendering of HTML
     * @param array $data
     */
    public function render(string $page, array $data = [])
    {
        $this->page = $page;
        extract($data);
        include_once $this->getTemplatePath();
    }

    /**
     * return path of template file
     * @return string
     */
    private function getTemplatePath()
    {
        return self::VIEW_DIR . self::TEMPLATE_DIR . DIRECTORY_SEPARATOR . "{$this->template}.php";
    }

    /**
     * return path of page template file
     * @return string
     */
    private function getPagePath(){
        return self::VIEW_DIR . self::PAGE_DIR . DIRECTORY_SEPARATOR . "{$this->page}.php";
    }

}