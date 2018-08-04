<?php 
$current = taxonomy_term_load(arg(2)); 
$tid = $current->tid;
$childrentid = taxonomy_get_parents_all($tid)[0]->tid;
$parenttid = taxonomy_get_parents_all($tid)[1]->tid;
$i=0;
$childrens = taxonomy_get_tree(2, $parenttid, 1);
foreach($childrens as $value){
     $childTid = taxonomy_get_tree(2, $parenttid, 1)[$i]->tid;
     $url = "http://roconsult.ru/taxonomy/term/".$childTid;
     $title = taxonomy_get_tree(2, $parenttid, 1)[$i]->name;
     if ($childTid == $tid) {
     print "<a href='$url' class='active'>$title</a>";
     } else {
     print "<a href='$url'>$title</a>";
     }
     
$i++;
};

?>
