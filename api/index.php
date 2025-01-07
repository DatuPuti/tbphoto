<?php
header('Access-Control-Allow-Origin: https://thomasborland.photography');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

require_once 'config/Database.php';
require_once 'controllers/PortfolioController.php';

$database = new Database();
$db = $database->connect();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

// Route the request to the appropriate controller
switch($uri[2]) {
    case 'portfolio':
        $controller = new PortfolioController($db);
        $controller->handleRequest($_SERVER['REQUEST_METHOD']);
        break;
    default:
        header("HTTP/1.1 404 Not Found");
        exit();
}

/*
This website is built using a Vue.js frontend and PHP backend API:

Frontend (Vue.js):
- Uses Vue Router for page navigation between Home, Portfolio, About, Contact and Services pages
- Components are lazy-loaded for better performance
- Has page transition animations
- Uses Vuetify for UI components
- Follows a modular structure with components, views, store, etc.

Backend (PHP API):
- Handles API requests from the frontend
- Uses controllers to process different routes (e.g. PortfolioController)
- Connects to a database to store/retrieve data
- Has CORS headers enabled to allow frontend access
- Follows RESTful API patterns with GET, POST, PUT, DELETE methods

The frontend makes API calls to this backend endpoint to fetch and manage data,
while keeping the presentation logic separate from the business logic.
*/