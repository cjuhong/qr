[
<?php $nb = count($highlights); $i = 0; foreach ($highlights as $id => $highlight): ++$i ?>
{
  "id": "<?php echo $id ?>",
<?php $nb1 = count($highlight); $j = 0; foreach ($highlight as $key => $value): ++$j ?>
    "<?php echo $key ?>": <?php echo json_encode($value).($nb1 == $j ? '' : ',') ?>
 
<?php endforeach ?>
}<?php echo $nb == $i ? '' : ',' ?>
 
<?php endforeach ?>
]
