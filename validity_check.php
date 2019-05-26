<?php function validity_check($iban){

    //Ignore errors - If you set 0, you won't see the errors, if you set 1 you will see all errors
    ini_set( 'display_errors', 0 );
    error_reporting( E_ALL );

    //The IBAN should not contain spaces
    $iban = strtolower(str_replace(' ','',$iban));

    //Country code using ISO 3166-1 alpha-2 – two letters,
    $cc = ['no'=>15,'be'=>16,'bi'=>16,'dk'=>18,'fo'=>18,'fi'=>18,'gl'=>18,'nl'=>18,'mk'=>19,'si'=>19,'at'=>20,'ba'=> 20,'ee'=>20,'kz'=>20,'xk'=>20,'lt'=>20,'lu'=>20,'hr'=>21,'lv'=>21,'li'=>21,'ch'=>21,'bh'=>22,'bg'=>22,'cr'=>22,'ge'=>22,'de'=>22,'ie'=>22,'me'=>22,'rs'=>22,'gb'=>22,'gi'=>23,'iq'=>23,'il'=>23,'tl'=>23,'ae'=>23,'ad'=>24,'cz'=>24,'md'=>24,'pk'=>24,'ro'=>24,'sa'=>24,'sk'=>24,'es'=>24,'se'=>24,'tn'=>24,'vg'=>24,'pt'=>25,'st'=>25,'ao'=>25,'cv'=>25,'gw'=>25,'mz'=>25,'is'=>26,'tr'=>26,'dz'=>26,'ir'=>26,'fr'=>27,'gr'=>27,'it'=>27,'mr'=>27,'mc'=>27,'sm'=>27,'cm'=>27,'cf'=>27,'td'=>27,'km'=>27,'cg'=>27,'dj'=>27,'eg'=>27,'gq'=>27,'ga'=>27,'mg'=>27,'al'=>28,'az'=>28,'by'=>28,'cy'=>28,'do'=>28,'sv'=>28,'gt'=>28,'hu'=>28,'lb'=>28,'pl'=>28,'bj'=>28,'bf'=>28,'hn'=>28,'ci'=>28,'ml'=>28,'ma'=>28,'ne'=>28,'sn'=>28,'tg'=>28,'br'=>29,'ps'=>29,'qa'=>29,'ua'=>29,'jo'=>30,'kw'=>30,'mu'=>30,'mt'=>31,'sc'=>31,'lc'=>32,'ni'=>32];

    //a-z/10-35
    $letters = ['a'=>10,'b'=>11,'c'=>12,'d'=>13,'e'=>14,'f'=>15,'g'=>16,'h'=>17,'i'=>18,'j'=>19,'k'=>20,'l'=>21,'m'=>22,'n'=>23,'o'=>24,'p'=>25,'q'=>26,'r'=>27,'s'=>28,'t'=>29,'u'=>30,'v'=>31,'w'=>32,'x'=>33,'y'=>34,'z'=>35];

    //Check that the total IBAN length is correct(array CC) as per the country.(first two characters of IBAN)
    if(strlen($iban) == $cc[substr($iban,0,2)]){

        //Move the four initial characters to the end of the string(cut 4 and concat at the end)
        $move = substr($iban, 4).substr($iban,0,4);

        //Convert string to an array
        $stringArray = str_split($move);
        $emptyString = "";


        //Replace each letter in the string with two digits, thereby expanding the string, where A = 10, B = 11, ..., Z = 35
        foreach($stringArray AS $key => $value){


            if(!is_numeric($stringArray[$key])){
                $stringArray[$key] = $letters[$stringArray[$key]];
            }
            $emptyString .= $stringArray[$key];
        }

        //Interpret the string as a decimal integer and compute the remainder of that number on division by 97. If the remainder is 1 the IBAN might be valid.
        if(bcmod($emptyString, '97') == 1)
        {
            echo $result = strtoupper("$iban") . ";" . "OK" . " <i class='fas fa-check'></i>";
        }
        else{
            echo $result = strtoupper("$iban") . ";" . "ERROR" . " <i class='fas fa-times'></i>";
        }
    } else{
        echo $result =  strtoupper("$iban") . ";" . "ERROR" . " <i class='fas fa-times'></i>";

    }
}

?>