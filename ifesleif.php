<?php

$per = 52;

if($per >= 80 && $per <= 100):

    echo "You Get Merit";


elseif($per >= 70 && $per <= 80):

    echo "You Get I Division";


elseif($per >= 60 && $per <= 70):

    echo "You Get II Division";


elseif($per >= 45 && $per <= 60):

    echo "You Get II Division";


elseif($per >= 33 && $per <= 45):

    echo "You Get III Division";



elseif($per < 33 ):

    echo "You Get Fail";

else:

    echo "Enter Your Correct Percentage";

endif;
?>