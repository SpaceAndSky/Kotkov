<?
require('function.php');
$page_content= include_template('index.php',['category_array' => $category_array,'lots_array' => $lots_array, "ny_date" => $ny_date]);

$layout_content =include_template('layout.php',['page_title' => 'Главная страница',$is_auth,'user_avatar'=>$user_avatar,'user_name'=>$user_name,'page_content' =>$page_content, 'category_array' => $category_array]);

print($layout_content);
?>