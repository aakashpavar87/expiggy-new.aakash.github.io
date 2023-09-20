<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;


class AboutController
{
    private TemplateEngine $view;
    public function __construct()
    {
        //For storing all paths we will make a config folder and paths.php file in it
        $this->view = new TemplateEngine(Paths::VIEW);
    }
    public function about()
    {
        echo $this->view->render('/about.php', [
            'title' => "About Page",
            'dangerous' => '<script>alert(123)</script>'
        ]);
    }
}
