<?php
for($i=1; $i<=50; $i++){
    if($i % 3 != 0 && $i % 5 != 0){
        echo $i;
        echo "\n";
    }
    if($i % 3 == 0 && $i % 5 != 0){
        echo "Foo";
        echo "\n";
    }
    if($i % 5 == 0 && $i % 3 != 0){
        echo "Bar";
        echo "\n";
    }
    if($i % 3 == 0 && $i % 5 == 0){
        echo "FooBar";
        echo "\n";
    }
}
