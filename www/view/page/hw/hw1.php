<?php

echo "HW1<hr>";

$players=array(
              array('name' => 'Black, Tarik',
                    'position' => 'F/C',
                    'number' =>28,
                    'growth' =>2.06,
                    'weight' =>113),

              array('name' => 'Brown, Anthony',
                    'position' => 'F',
                    'number' =>3,
                    'growth' =>2.01,
                    'weight' =>96),

              array('name' => 'Calderón, José',
                    'position' => 'G',
                    'number' =>5,
                    'growth' =>1.91,
                    'weight' =>91),

              array('name' => 'Deng, Luol',
                    'position' => 'F',
                    'number' =>2,
                    'growth' =>2.06,
                    'weight' =>100),

              array('name' => 'Black Tarik',
                    'position' => 'F/C',
                    'number' =>28,
                    'growth' =>2.06,
                    'weight' =>113),

              array('name' => 'Huertas, Marcelo',
                    'position' => 'G',
                    'number' =>9,
                    'growth' =>1.91,
                    'weight' =>84),

              array('name' => 'Ingram, Brandon',
                    'position' => 'F',
                    'number' =>14,
                    'growth' =>2.06,
                    'weight' =>86),

              array('name' => 'Mozgov, Timofey',
                    'position' => 'C',
                    'number' =>20,
                    'growth' =>2.16,
                    'weight' =>125),
              );

//echo $col = (int)(count($players));

/*
for ($i = 0; $i < $col; $i++) {
    echo '<br>' . $players[$i]['name'];
}
*/

foreach($players as $q1){
    foreach ($q1 as $q2){
        echo "$q1".'<br>';
    }
    echo '<br>';
}


/*echo '<pre>';
print_r($players);
echo '</pre>';*/

?>