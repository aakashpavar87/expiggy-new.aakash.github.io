<?php

declare(strict_types=1);

namespace Framework;

use App\Controller;

class Router
{
    private array $routes = [];
    public function add(string $method, string $path, array $controller)
    {
        $path = $this->normalise($path);
        $this->routes[] = [
            'path' => $path,
            'method' => strtoupper($method),
            'controller' => $controller
        ];
    }
    private function normalise(string $path): string
    {
        $path = trim($path, '/');
        $path = "/{$path}/";
        $path = preg_replace("#[/]{2,}#", '/', $path);
        return $path;
    }
    public function dispatch(string $path, string $method)
    {
        $path = $this->normalise($path);
        $method = strtoupper($method);
        // echo $path . $method;
        //Now we will find appropriate path and method
        foreach ($this->routes as $route) {
            if (!preg_match("#^{$route["path"]}$#", $path) || $route["method"] !== $method) {
                continue;
            }
            // print_r($route['controller']);
            [$class, $function] = $route['controller'];
            // echo $class;
            // echo "<br>";
            // echo $function;
            $containerInstance = new $class; //here we dont have to add ()
            $containerInstance->{$function}();
        }
    }
}
