<?php
$first_names = array(
"Liam",
"Emma",
"Noah",
"Olivia",
"William",
"Ava",
"James",
"Isabella",
"Oliver",
"Sophia",
"Benjamin",
"Charlotte",
"Elijah ",
"Mia",
"Lucas",
"Amelia",
"Mason",
"Harper",
"Logan");
$second_names = array(
"Smith",
"Jones",
"Taylor",
"Brown",
"Williams",
"Wilson",
"Johnson",
"Davies",
"Robinson",
"Wright",
"Thompson",
"Evans",
"Walker",
"White",
"Roberts",
"Green",
"Hall",
"Wood",
"Jackson",
"Clarke",
);
$cities = array("London","Manchester","Liverpool","Leeds","Birmingham","Bristol","Newcastle","Nottingham","Portsmouth","Sheffield","Southampton");
$count = 50;
$sql = "INSERT INTO `mysql_table_search` (`from_date`, `to_date`, `full_name`, `email`, `city`) VALUES";
$records = array();
for($i=0; $i<=$count; $i++){
    $date_from = mt_rand(strtotime("+5 days"),strtotime("+6 months"));
    $date_to = mt_rand(strtotime("+2 days",$date_from),strtotime("+7 days",$date_from));
    $name = $first_names[array_rand($first_names)]." ".$second_names[array_rand($second_names)];
    $email = strtolower(str_replace(" ", "",$name)).'@gmail.com';
    $records[] = "('".date("Y-m-d",$date_from)."', '".date("Y-m-d",$date_to)."', '".$name."', '".$email."', '".$cities[array_rand($cities)]."')";
}

$sql .= implode(",\n",$records).";";
echo $sql;
?>