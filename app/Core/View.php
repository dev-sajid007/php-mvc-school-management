<?php
namespace App\Core;

class View
{
    
    public static function render(string $view, array $data = [], ?string $layout = null): void
    {
        extract($data);

        $viewFile = __DIR__ . '/../Views/' . $view . '.php';

        if (!file_exists($viewFile)) {
            throw new \Exception("View file not found: $viewFile");
        }

        

        if ($layout) {
            $layoutFile = __DIR__ . '/../Views/layouts/' . $layout . '.php';

            if (!file_exists($layoutFile)) {
                throw new \Exception("Layout file not found: $layoutFile");
            }

            ob_start();
            include $viewFile;
            $content = ob_get_clean();

            include $layoutFile;
        } else {
            include $viewFile;
        }
    }
}
