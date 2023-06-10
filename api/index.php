<?php
//$link = $_SERVER['REQUEST_URI'];
//echo $link;
//
//$requestMethod = $_SERVER['REQUEST_METHOD'];
//echo $requestMethod;
//
//
//$params = $_SERVER['QUERY_STRING'];
//echo $params;
//
//
////$link = $_SERVER['REQUEST_URI'];
//
////switch ($link) {
////    case '/' :
////        require __DIR__ . '/views/index.php';
////        break;
////    case '' :
////        require __DIR__ . '/views/index.php';
////        break;
////    case '/about' :
////        require __DIR__ . '/views/about.php';
////        break;
////    default:
////        http_response_code(404);
////        require __DIR__ . '/views/404.php';
////        break;
////}
///
include ("NodesAPI.php");
echo '{"data":[' . fetch_tree().']}';
