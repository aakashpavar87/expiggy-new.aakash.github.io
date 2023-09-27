<?php

declare(strict_types=1);

namespace Framework;

//Currently template engine dont know how to find templates so we are creating view directory
//Here we will provide a base path to find template
class TemplateEngine
{
    private array $globalTemplateData = [];
    //This is syntax parameter will create a property of TemplateEngine Class behind the scenes
    public function __construct(private string $basePath)
    {
    }
    public function render(string $path, array $data = [])
    { //We are providing data to our method inorder to forward it to home Template
        //if we want to store all data according its variable than we will use extract function of PHP
        extract($data, EXTR_SKIP);
        extract($this->globalTemplateData, EXTR_SKIP);
        ob_start();
        include $this->resolve($path);
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
        //Here we have to use $this keyword
    }
    public function resolve(string $template)
    {
        return "{$this->basePath}/{$template}";
    }
    public function addGlobaldata(string $key, mixed $value)
    {
        $this->globalTemplateData[$key] = $value;
    }
}
