<?php 

function text_fixup($string)
{
    $whitelist = '/[^a-zA-Z0-9а-яА-ЯéüртхцчшщъыэюьЁуфҐ \.\*\+\\n|#:!"%@{} _-]/';
    return preg_replace($whitelist, '', $string);
} 