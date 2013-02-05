<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfJQueryUIPlugin');
    $this->enablePlugins('pmSuperfishMenuPlugin');
    $this->enablePlugins('sfThumbnailPlugin');
    $this->enablePlugins('sfDoctrineOAuthPlugin');
    $this->enablePlugins('sfMelodyPlugin');
    $this->enablePlugins('sfDoctrineGuardLoginHistoryPlugin');
    $this->enablePlugins('csDoctrineActAsSortablePlugin');
    $this->enablePlugins('sdInteractiveChartPlugin');
  }
}
