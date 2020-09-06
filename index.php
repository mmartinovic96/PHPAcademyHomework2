<?php
$name = 'mateo';
$abc = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$namearr= str_split($name, 1);
$enam= array_reverse($namearr);
$namenum= count($namearr);
$abcnum= count($abc);

for ($i=0;$i<$namenum;$i++){
    for($l=0;$l<$abcnum;$l++){
        if($namearr[$i]==$abc[$l]){
            if($namearr[$i]==$enam[$i]){
                echo '<b><u>'.$namearr[$i].'</u></b>';
                continue;
            }
            echo '<b>'.$namearr[$i].'</b>';
        }
        if($enam[$i]==$abc[$l]){
            echo '<u>'.$enam[$i].'</u>';
        }
        echo $abc[$l];
    }
    echo '<br>';
}

