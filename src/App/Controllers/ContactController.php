<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class ContactController
{
    public function __construct(private TemplateEngine $view)
    {
    }
    public function contact()
    {
        echo $this->view->render('contact.php');
    }
}
