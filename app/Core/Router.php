<?php
namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $path, callable $callback)
    {
        $this->routes['GET'][$this->normalize($path)] = $callback;
    }

    public function post(string $path, callable $callback)
    {
        $this->routes['POST'][$this->normalize($path)] = $callback;
    }

    public function dispatch(string $method, string $uri)
    {
        $path = $this->normalize(parse_url($uri, PHP_URL_PATH));
        $callback = $this->routes[$method][$path] ?? null;

        if (!$callback) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        call_user_func($callback);
    }

    private function normalize(string $path): string
    {
        return '/' . trim($path, '/');
    }
}
