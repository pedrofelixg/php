<?php
for ($ip = 1; $ip <= 100; $ip+=2) {
    echo "#$ip". PHP_EOL;
}
for ($ip = 1; $ip <=100; $ip % $ip+=2) {
    echo "#$ip". PHP_EOL;
}