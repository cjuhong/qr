
<?php
			use_helper('sdInteractiveChart');

			$chart_colum = InteractiveChart::newColumnChart();
			$chart_colum->setWidthAndHeight('900', '500');
			//$chart_colum->setDataColors(array('#aa0000'));
			$chart_colum->setBaselineColor('#ccc');
			$chart_colum->setTitle("Title");
			$chart_colum->inlineGraph(array('hits' => array(1,9,5),'sales' => array(10,2,6)), array('Monday', 'Tuesday', 'Wednesday'), 'chart_div_colum');
			$chart_colum->render();
?>

    <div id="chart_div_area"></div>
    <div id="chart_div_bar"></div>
    <div id="chart_div_line"></div>
    <div id="chart_div_colum"></div>
  <?php echo $helper->linkToList(array(  'params' =>   array(  ),  'class_suffix' => 'list',  'label' => 'Back to list',)) ?>

