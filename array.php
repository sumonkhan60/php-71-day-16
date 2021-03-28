<?php
//    $data = [];
//    $data[0] = 10;
//    $data[1] = 20;
//    $data[2] = 30;
//
//    $data['name'] = 'Sumon Khan';
//    $data['city'] = 'Pabna';
//    $data['country'] = 'Bangladesh';
//    $data = [10, 20, 30, 'Sumon', 'Pabna', 'Bangladesh'];
//     $data = [
//         'name'    =>'Sumon Khan',
//         'city'    =>'Pabna',
//         'country' =>'Bangladesh',
//         'phone'   =>'01821444450',
//         'gender'  =>'Male'
//     ];

//     foreach ($data as $value){
//         echo $value.'<br>';
//     }

//    echo '<pre>';
//    print_r($data);
//    echo '<pre>';
//    var_dump($data);

//    $data = [];
//    $data[0][0] = 10;
//    $data[0][1] = 20;
//    $data[0][2] = 30;
//
//    $data[1][0] = 40;
//    $data[1][1] = 50;
//    $data[1][2] = 60;
//
//    $data[2][0] = 70;
//    $data[2][1] = 80;
//    $data[2][2] = 90;
//
//    $data[3][0] = 100;
//    $data[3][1] = 110;
//    $data[3][2] = 120;
//
//    foreach ($data as $value) {
////        echo $value[0].' '.$value[1].' '.$value[2].'<br>';
//        foreach ($value as $v_value) {
//            echo $v_value.' ';
//        }
//        echo '<br>';
//    }
//    function demo($firstName, $lastName) {
////        $firstName = 'Sumon';
////        $lastName = 'Khan';
//        $fullName = $firstName.' '.$lastName;
//        return $fullName;
//        echo $fullName;
//    }
//    echo '<br>=================<br>';
//    echo demo('Sumon', 'Khan');
//    echo '<br>=================<br>';
//    $res = demo('Ashraful', 'Islam');
//    echo "Full name is : ".' '.$res;
//    echo '<br>=================<br>';
//    $res1 = demo('Sumon', 'Ahmad');
//    echo '<h1>'.$res1.'<h1>';

    class Demo {
        public $name = 'Sumon Khan';
        public $city = 'Pabna';
        function add() {
            echo 'In Add';
        }
        function hello() {
            echo 'In Hello';
        }
    }
    $demo = new Demo();
    $demo->hello();
    echo '<br>';
    echo $demo->city;


?>