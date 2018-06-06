<?php

$connect=mysqli_connect("localhost", "lgolovina", "neto1757", "global");

if (!mysqli_set_charset($connect, "utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($connect));
    exit();
} else {
    printf("Текущий набор символов: %s\n", mysqli_character_set_name($connect));
}

?>