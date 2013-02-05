
<?php
					use_helper('sdInteractiveChart');

					$chart_line = InteractiveChart::newLineChart();
					$chart_line->setWidthAndHeight('900', '500');
					//$chart_line->setDataColors(array('#aa0000'));
					$chart_line->setTitle("Title");
					$chart_line->setBaselineColor('#ccc');
					$chart_line->inlineGraph(array('hits' => array(1,9,5),'sales' => array(10,2,6)), array('Monday', 'Tuesday', 'Wednesday'), 'chart_div_line');
					$chart_line->render();
?>

    <div id="chart_div_area"></div>
    <div id="chart_div_bar"></div>
    <div id="chart_div_line"></div>
    <div id="chart_div_colum"></div>
  <?php echo $helper->linkToList(array(  'params' =>   array(  ),  'class_suffix' => 'list',  'label' => 'Back to list',)) ?>

