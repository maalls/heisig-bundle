<?php

namespace Maalls\HeisigBundle\Lib;


class Text {


    public function splitKanjis($sentence)
    {

        preg_match_all("/[\x{3400}-\x{4DB5}\x{4E00}-\x{9FCB}\x{F900}-\x{FA6A}]/uis", $sentence, $matches);

        return $matches ? $matches[0]:[];
        
    }

}