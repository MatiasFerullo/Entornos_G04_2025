<?php
    $arbolSitio = [
        'principal' => [],
        
        'inicioSesion' => [
            ['title' => 'Principal', 'url' => 'principal.php']
        ],
        
        'menuDueno' => [
            ['title' => 'Principal', 'url' => 'principal.php'],
            ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php']
        ],
            'altaDescuentos' => [
                ['title' => 'Principal', 'url' => 'principal.php'],
                ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php'],
                ['title' => 'Menú', 'url' => 'menuDueno.php']
            ],
            'usoDescuentos' => [
                ['title' => 'Principal', 'url' => 'principal.php'],
                ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php'],
                ['title' => 'Menú', 'url' => 'menuDueno.php']
            ],
            'peticionUsoDescuentos' => [
                ['title' => 'Principal', 'url' => 'principal.php'],
                ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php'],
                ['title' => 'Menú', 'url' => 'menuDueno.php']
            ],
    
        'menuUsuario' => [
            ['title' => 'Principal', 'url' => 'principal.php'],
            ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php']
        ],
        
        'menuAdmin' => [
            ['title' => 'Principal', 'url' => 'principal.php'],
            ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php']
        ],
            'peticionAltaDescuentos' => [
                ['title' => 'Principal', 'url' => 'principal.php'],
                ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php'],
                ['title' => 'Menú', 'url' => 'menuAdmin.php']
            ],
            'listadoLocales' => [
                ['title' => 'Principal', 'url' => 'principal.php'],
                ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php'],
                ['title' => 'Menú', 'url' => 'menuAdmin.php']
            ],
                'altaLocal' => [
                    ['title' => 'Principal', 'url' => 'principal.php'],
                    ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php'],
                    ['title' => 'Menú', 'url' => 'menuAdmin.php'],
                    ['title' => 'Listado Locales', 'url' => 'listadoLocales.php']
                ],
            'altaDuenoLocal' => [
                ['title' => 'Principal', 'url' => 'principal.php'],
                ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php'],
                ['title' => 'Menú', 'url' => 'menuAdmin.php']
            ],
            'novedades' => [
                ['title' => 'Principal', 'url' => 'principal.php'],
                ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php'],
                ['title' => 'Menú', 'url' => 'menuAdmin.php']
            ],
                'altaNovedad' => [
                    ['title' => 'Principal', 'url' => 'principal.php'],
                    ['title' => 'Iniciar sesión', 'url' => 'inicioSesion.php'],
                    ['title' => 'Menú', 'url' => 'menuAdmin.php'],
                    ['title' => 'Listado Novedades', 'url' => 'novedades.php']
                ]
    ];

    function generarBreadcrumbs($pagActualID, $arbolSitio) {

        $breadcrumbs = [];

        // busca el path de la página actual en el árbol del sitio
        if (isset($arbolSitio[$pagActualID])) {
            $breadcrumbs = $arbolSitio[$pagActualID];
        }

        // página actual sin enlace
        $pagActualTitulo = getCurrentPageTitle($pagActualID);
        if ($pagActualTitulo) {
            $breadcrumbs[] = ['title' => $pagActualTitulo, 'url' => null];
        }

        return $breadcrumbs;
    }

    function getCurrentPageTitle($pageId) {
        $titles = [
            'principal' => 'Principal',
            'inicioSesion' => 'Iniciar sesión',
            'menuDueno' => 'Menú',
            'altaDescuentos' => 'Alta Descuentos',
            'usoDescuentos' => 'Uso Descuentos', 
            'peticionUsoDescuentos' => 'Petición Uso Descuentos',
            'menuUsuario' => 'Menú Usuario',
            'menuAdmin' => 'Menú Admin',
            'peticionAltaDescuentos' => 'Petición Alta Descuentos',
            'listadoLocales' => 'Listado Locales',
            'altaLocal' => 'Alta Local',
            'altaDuenoLocal' => 'Alta Dueño Local',
            'novedades' => 'Listado Novedades',
            'altaNovedad' => 'Alta Novedad'
        ];
        
        return isset($titles[$pageId]) ? $titles[$pageId] : null;
    }

    function generarBreadcrumbsHTML($breadcrumbs) {
        $html = '<nav aria-label="breadcrumb">';
        $html .= '<ol class="breadcrumb">';
        
        foreach ($breadcrumbs as $crumb) {
            // Validación
            if (!is_array($crumb) || !isset($crumb['title'])) {
                continue; // Skip invalid breadcrumb items
            }
            
            if (!isset($crumb['url']) || $crumb['url'] === null) {
                // página actual sin enlace
                $html .= '<li class="breadcrumb-item active" aria-current="page">' . 
                         htmlspecialchars($crumb['title']) . '</li>';
            } else {
                // breadcrumb con enlace
                $html .= '<li class="breadcrumb-item">' .
                         '<a href="' . htmlspecialchars($crumb['url']) . '">' . 
                         htmlspecialchars($crumb['title']) . '</a></li>';
            }
        }
        
        $html .= '</ol>';
        $html .= '</nav>';
        return $html;
    }
?>