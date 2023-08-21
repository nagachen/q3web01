<?php


for($i=1;$i<=9;$i++){
    $seats=serialize([$i*2,$i*2+1]);
    $sql="INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES 
                               (NULL, '20230901000$i', '院線片0$i', '2023-09-10', '14:00~16:00', '2', '$seats');";
    echo $sql;
    echo "<br>";
}
