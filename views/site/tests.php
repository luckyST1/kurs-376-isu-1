<?php
?>
<div>
<?php
echo "<div class='panel-group category-products' id='accordian'>";
echo "<div class='panel panel-default'>";
echo "<div class='panel-heading'>";
echo "<h3 class='panel-title'>Все тесты.</h3>";
echo "</div>";
echo "</div>";
foreach ($model as $yel) {
    echo "<div class='panel panel-default'>";
    echo "<div class='panel-heading'>";
    echo "<h3 class='panel-title'><a href='index?test_create=".$yel->question."'>".$yel->test_create."</a></h3>";
    echo "</div>";
    echo "</div>";

}

?>
</div>
