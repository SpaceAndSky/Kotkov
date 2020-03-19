<?
$is_auth = rand(0, 1);

$category_array =array("Доски и лыжи","Крепления","Ботинки","Одежда","Инструменты","Разное");
$lots_array =array(
					array("name" => "2014 Rossignol District Snowboard", "category" => "Доски и лыжи", "price" =>10999 , "url" =>"img/lot-1.jpg"),
					array("name" => "DC Ply Mens 2016/2017 Snowboard", "category" => "Доски и лыжи", "price" =>159999 , "url" =>"img/lot-2.jpg"),
					array("name" => "Крепления Union Contact Pro 2015 года размер L/XL", "category" => "Крепления", "price" =>8000 , "url" =>"img/lot-3.jpg"),
					array("name" => "Ботинки для сноуборда DC Mutiny Charocal", "category" => "Ботинки", "price" =>10999 , "url" =>"img/lot-4.jpg"),
					array("name" => "Куртка для сноуборда DC Mutiny Charocal", "category" => "Одежда", "price" => 7500, "url" =>"img/lot-5.jpg"),
					array("name" => "Маска Oakley Canopy", "category" => "Разное", "price" => 5400, "url" => "img/lot-6.jpg")
				  );
$user_name = 'Максим';
function ceilprice($i,$bool)
{
	$i = ceil($i);
	if ($i > 1000)
	{
		$i = number_format($i, 0 , ',', ' ');
	}
	if ($bool == true)
	{
		$i = $i . "<p class='rub'>₽</p>";
	}
		return $i;
}

function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '404';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require($name);

    $result = ob_get_clean();

    return $result;
}

?>