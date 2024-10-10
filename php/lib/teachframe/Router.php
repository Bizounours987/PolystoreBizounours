<?php

namespace teachframe;

class Router {
    private array $routes;
    
    public function __construct() {
        $this->routes = [];
    }
    
    /*
    route: {'method', 'path', 'redirect'}
    route: {'method', 'path', 'controller', 'action'}
    */
    public function addRoute (array $route) {
        $this->routes[] = $route;
    }
    
    public function loadRoutes (string $yamlFile) {
        $this->routes = yaml_parse_file($yamlFile)['routes'];
    }

    public function dispatch (string $requestMethod, string $requestUri) {
        foreach ($this->routes as $route) {
            if ($route['method'] == $requestMethod) {
                $uriParts = explode('/', trim($requestUri, '/'));
                $routeParts = explode('/', trim($route['path'], '/'));
                if (count($uriParts) == count($routeParts)) {
                    $params = [];
                    $match = true;
                    foreach ($routeParts as $index => $part) {
                        if (strpos($part, '{') == 0 && strpos($part, '}') == strlen($part) - 1) {
                            $params[] = $uriParts[$index];
                        } elseif ($part != $uriParts[$index]) {
                            $match = false;
                            break;
                        }
                    }
                    if ($match) {
                        if (isset($route['redirect'])) {
                            header('Location: ' . $route['redirect']);
                        } else {
                            $controller = new $route['controller']();
                            $method = $route['action'];
                            $controller->$method(...$params);
                        }
                        return;
                    }
                }
            }
        }
          http_response_code(404);
    }
    
    public function getRoutes(): array {
        $routes = [];
        foreach ($this->routes as $route) {
            $fields = [];
            foreach ($route as $key => $value) {
                if ($key != 'controller' && $key != 'action') {
                    $fields[$key] = $value;
                }
            }
            $routes[] = $fields; 
        }
        return $routes;
    }
}

