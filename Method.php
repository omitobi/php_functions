<?php
namespace App;

class Method {

    /**
     * Split a string by another string into an array
     * 
     * @param string $haystack
     * @param string $separator
     * 
     * @return array
     */
    public static function explode(string $haystack, string $separator = '')
    {
        $length = strlen($haystack);
        $result = [];
        $index = 0;

        for ($i=0; $i < $length; $i++) { 
            $next = $haystack[$i];
        
            if ($next === $separator) {
                $index ++;
                continue;
            }

            if (! isset($result[$index])) {
                $result[$index] = $next;
            } else {
                $result[$index] .= $next;
            }

        }
        return $result;
    }
}

?>
