<?php
function fillSessionPlayer (string $player, array $information)
{
    $_SESSION[$player]['id'] = $information['id'];
    $_SESSION[$player]['name'] = $information['name'];
    $_SESSION[$player]['combat'] = $information['powerstats']['combat'];
    $_SESSION[$player]['power'] = $information['powerstats']['power'];
    $_SESSION[$player]['speed'] = $information['powerstats']['speed'];
    $_SESSION[$player]['intelligence'] = $information['powerstats']['intelligence'];
    $_SESSION[$player]['strength'] = $information['powerstats']['strength'];
    $_SESSION[$player]['durability'] = $information['powerstats']['durability'];
    $_SESSION[$player]['life'] = 100;
    $_SESSION[$player]['counter'] = 30;
}