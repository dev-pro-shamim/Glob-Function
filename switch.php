<!-- <?php

// $week = 4;
// switch($week){


//     case 1:

//         echo "Today Saturday";

//         break;

//         case 2:

//             echo "Today Sunday";

//             break;

//             case 3:

//                 echo "Today Monday";

//                 break;

//                 case 4:

//                     echo "Today tuesday";
//                     break;

//                     default:
//                     echo " Enter Valid Weekday";
// }


// ?> -->

<?php

$age = 55;
switch(true){


    case ($age >= 15 && $age <= 20):

        echo "You are Eligable";

        break;

        case ($age >= 21 && $age <= 30):

            echo "You are Not Eligable";
    
            break;



                    default:
                    echo " Enter Valid age";
}


?>