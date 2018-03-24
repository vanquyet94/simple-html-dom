<?php
$html = '<div>
<span class="test1 test2 test3" data-id="5"  >text 1</span><br />
<span class="test1 test3 test2">text 4</span></div>';

// Find all elements with the class test2 attribute
foreach($html->find('[class=test2]') as $e){
    $e->removeAttribute("data-id"); //remove attribute 
    $e->class = preg_replace("/(?:^|\s)editable(?:\s|$)/msi", " ", $e->class);
}

echo $html;

/*
<div>
<span class="test1 test3">text 1</span><br />
<span class="test1 test3">text 4</span></div> 
*/
