<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@school') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>


	<?php $moduleName = sfContext::getInstance()->getModuleName();

				$tableColumnNames = Doctrine::getTable($moduleName);?>

	<?php $label = $tableColumnNames->getColumnNames()?>

      <?php use_helper('tabs') ?>
      <?php tabMainJS("tp1","tabPane1", "tabPage1", 'English');?>
      <?php echo $form['en']->renderRow() ?>
	  <?php $a=0;?>
    	<?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
  			<?php foreach ($fields as $name => $field): ?>
          <?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?>
			<?php if ($name!='en'&& !in_array($name,$label)):?>
           <?php tabPageOpenClose("tp1", $a, $form[$name]->renderLabel());?>
 			   <?php echo $form[$name]->renderRow() ?>
		    	<?php $a++;?>
				<?php endif;?>		
  			<?php endforeach; ?>
    <?php endforeach; ?>

      <?php tabInit();?>
<table>
  			<?php foreach ($fields as $name => $field): ?>
          <?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?>
			<?php if (!in_array($name,$label)) continue ?>
    <?php echo $form[$name]->renderRow() ?>
  			<?php endforeach; ?>
	<tr>
      <td colspan="1"><label>Last Modifier:</label>
      </td>
      <td colspan="1"><label><?php echo $school->getLastModifier() ?></label>
      </td>
    </tr>
	<tr>
      <td colspan="1"><label>Updated at:</label>
      </td>
      <td colspan="1"><label><?php echo $school->getUpdatedAt() ?></label>
      </td>
    </tr>
</table>

    <?php include_partial('school/form_actions', array('school' => $school, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </form>
</div>
