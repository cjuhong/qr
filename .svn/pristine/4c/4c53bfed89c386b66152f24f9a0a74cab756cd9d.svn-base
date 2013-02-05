
<?php
			use_helper('sdInteractiveChart');
			$chart_area = InteractiveChart::newAreaChart();
			$chart_area->setWidthAndHeight('900', '500');
			//$chart_area->setDataColors(array('#aa0000'));
			$chart_area->setBaselineColor('#ccc');
			$chart_area->setTitle("Title");
			print_r($chart_area);
			$chart_area->inlineGraph(array('hits' => array(1,9,5),'sales' => array(10,2,6)), array('Monday', 'Tuesday', 'Wednesday'), 'chart_div_area');
			$chart_area->render();

?>

    <div id="chart_div_area"></div>
    <div id="chart_div_bar"></div>
    <div id="chart_div_line"></div>
    <div id="chart_div_colum"></div>
  <?php echo $helper->linkToList(array(  'params' =>   array(  ),  'class_suffix' => 'list',  'label' => 'Back to list',)) ?>

