
<?php
		use_helper('sdInteractiveChart');
		$chart_bar = InteractiveChart::newBarChart();



		$chart_bar->setWidthAndHeight('900', '500');
		//$chart_bar->setDataColors(array('#aa0000'));
		$chart_bar->setBaselineColor('#ccc');
         

		$chart_bar->setTitle("Title");
		$chart_bar->inlineGraph(array('hits' => array(1,9,5),'sales' => array(10,2,6)), array('Monday', 'Tuesday', 'Wednesday'), 'chart_div_bar');
		$chart_bar->render();
?>

    <div id="chart_div_area"></div>
    <div id="chart_div_bar"></div>
    <div id="chart_div_line"></div>
    <div id="chart_div_colum"></div>
  <?php echo $helper->linkToList(array(  'params' =>   array(  ),  'class_suffix' => 'list',  'label' => 'Back to list',)) ?>

