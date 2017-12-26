<?php

function getKeyWords($article, $repits, $length)
{          
        $text = explode(" ", strip_tags($article));
        $pieces = array_count_values($text);
        $keyword = '';
        
        foreach ($pieces as $key => $value) {
                if (iconv_strlen($key) > $length && $value > $repits) {
                        $keyword = $keyword . ' ' .$key;
                } 
        }
        return $keyword;
}
