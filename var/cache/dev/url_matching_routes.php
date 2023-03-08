<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cart/delete' => [
            [['_route' => 'cart_delete_all', '_controller' => 'App\\Controller\\CartController::deleteAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'delete_all', '_controller' => 'App\\Controller\\CartController::deleteAll'], null, null, null, false, false, null],
        ],
        '/contrat' => [[['_route' => 'app_contrat_index', '_controller' => 'App\\Controller\\ContratController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contrat/mod' => [[['_route' => 'app_modcontrat_index', '_controller' => 'App\\Controller\\ContratController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/contrat/sup' => [[['_route' => 'app_supcontrat_index', '_controller' => 'App\\Controller\\ContratController::index3'], null, ['GET' => 0], null, false, false, null]],
        '/contrat/front' => [[['_route' => 'app_contratfront_index', '_controller' => 'App\\Controller\\ContratController::index4'], null, ['GET' => 0], null, false, false, null]],
        '/contrat/new' => [[['_route' => 'app_contrat_new', '_controller' => 'App\\Controller\\ContratController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/offre' => [[['_route' => 'app_offre_index', '_controller' => 'App\\Controller\\OffreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offre/mod' => [[['_route' => 'app_modoffre_index', '_controller' => 'App\\Controller\\OffreController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/offre/sup' => [[['_route' => 'app_supoffre_index', '_controller' => 'App\\Controller\\OffreController::index3'], null, ['GET' => 0], null, false, false, null]],
        '/offre/front' => [[['_route' => 'app_offrefront_index', '_controller' => 'App\\Controller\\OffreController::index4'], null, ['GET' => 0], null, false, false, null]],
        '/offre/new' => [[['_route' => 'app_offre_new', '_controller' => 'App\\Controller\\OffreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offre/searchOffre/search' => [[['_route' => 'searchOffre', '_controller' => 'App\\Controller\\OffreController::searchOffre'], null, null, null, false, false, null]],
        '/AllOffres' => [[['_route' => 'app-offrejson_index', '_controller' => 'App\\Controller\\OffreMObileController::getOffres'], null, null, null, false, false, null]],
        '/AddOffres' => [[['_route' => '$app_offre_AddJson', '_controller' => 'App\\Controller\\OffreMObileController::AddOffreMobile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stripe' => [[['_route' => 'app_stripe', '_controller' => 'App\\Controller\\StripeController::index'], null, null, null, false, false, null]],
        '/stripeterm' => [[['_route' => 'app_stripe_term', '_controller' => 'App\\Controller\\StripeController::index2'], null, null, null, false, false, null]],
        '/stripe/create-charge' => [[['_route' => 'app_stripe_charge', '_controller' => 'App\\Controller\\StripeController::createCharge'], null, ['POST' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/([^/]++)(*:31)'
                        .'|remove/([^/]++)(*:53)'
                    .')'
                    .'|ontrat/([^/]++)(?'
                        .'|/(?'
                            .'|pdf(*:86)'
                            .'|edit(*:97)'
                        .')'
                        .'|(*:105)'
                    .')'
                .')'
                .'|/offre/([^/]++)(?'
                    .'|(*:133)'
                    .'|/edit(*:146)'
                    .'|(*:154)'
                .')'
                .'|/showoffre/([^/]++)(*:182)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:221)'
                    .'|wdt/([^/]++)(*:241)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:287)'
                            .'|router(*:301)'
                            .'|exception(?'
                                .'|(*:321)'
                                .'|\\.css(*:334)'
                            .')'
                        .')'
                        .'|(*:344)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], ['GET' => 0], null, false, true, null]],
        53 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'app_contratpdf', '_controller' => 'App\\Controller\\ContratController::generatePdfAction'], ['id'], null, null, false, false, null]],
        97 => [[['_route' => 'app_contrat_edit', '_controller' => 'App\\Controller\\ContratController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        105 => [
            [['_route' => 'app_contrat_show', '_controller' => 'App\\Controller\\ContratController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_contrat_delete', '_controller' => 'App\\Controller\\ContratController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        133 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        146 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        154 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        182 => [[['_route' => 'offre', '_controller' => 'App\\Controller\\OffreMObileController::Offre'], ['id'], null, null, false, true, null]],
        221 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        241 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        287 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        301 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        321 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        334 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        344 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
