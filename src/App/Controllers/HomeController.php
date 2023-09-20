<?php

declare(strict_types=1);

namespace App\Controllers; //This means Controller is exist in App Folder

use Framework\TemplateEngine;
use App\Config\Paths;

class HomeController
{
    private TemplateEngine $view;
    public function __construct()
    {
        //For storing all paths we will make a config folder and paths.php file in it
        $this->view = new TemplateEngine(Paths::VIEW);
    }
    public function home()
    {
        // echo "Home page is Runnig";
        // var_dump($this->view);
        // dd($this->view);
        // $secret = "shhvh";
        //Here render method is returning string output buffer
        echo $this->view->render("/index.php", [
            'title' => 'Home Page',
            'desc' => 'I am Aakash Pavar'
        ]);
    }
}
