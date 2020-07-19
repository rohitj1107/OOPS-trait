<?php

trait hello{
    public function showhello(){
        return 'Hello world';
    }
}
trait by{
    function showby(){
        return 'By by world';
    }
}
class a{
    use hello , by;
}

$obj = new a;
echo $obj->showhello();
echo '<br>';
echo $obj->showby();
?>
