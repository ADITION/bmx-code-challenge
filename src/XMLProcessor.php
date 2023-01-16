<?php

namespace Adition;

class XMLProcessor {
    function process($filepath) {
        $x = simplexml_load_file($filepath);
        $sum = 0;
        $cnt = 0;
        foreach ($x->children() as $c) {$sum += (int)$c;$cnt++;}
        $mean = $sum/ $cnt;
        return json_encode(array("sum" => $sum, "mean" => $mean));
    }

}


