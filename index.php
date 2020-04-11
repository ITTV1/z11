<?php


Положение указателя текущей позиции

int  fseek(int $a, int $off, int $when = SEEK_SET)

SEEK_CUR
SEEK_CUT
SEEK_END




int ftell(int $a)



bool ftruncate(int $a, int $size)



$a = fopen("f.txt", "r+");
ftruncate($a, 0);//очищает содержимое файла
fseek($a, 0, SEEK_SET);//происходит переход в начало файла




?>
