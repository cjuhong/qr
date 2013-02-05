<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@cdt_comments') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>


      <?php use_helper('tabs') ?>
      <?php tabMainJS("tp1","tabPane1", "tabPage1", 'Chinese');?>
      <?php echo $form['zh']->renderRow() ?>
	  <?php $a=0;?>
    	<?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
  			<?php foreach ($fields as $name => $field): ?>
          <?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?>
			<?php if ($name!='zh'&& $name!='orders'&& $name!='last_modifier'&& $name!='updated_at'&& $name!='image'&& $name!='link_url'&& $name!='is_hidden'&& $name!='parent_language'&& $name!='parent_id'&& $name!='start_date'&& $name!='end_date'&& $name!='link_target'):?>
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
			<?php if ($name!='orders'&& $name!='last_modifier'&& $name!='updated_at'&& $name!='link_url'&& $name!='start_date'&& $name!='end_date'&& $name!='entertainment_type'&& $name!='panorama'&& $name!='image_one'&& $name!='image_two'&& $name!='image_three'&& $name!='image'&& $name!='in_trip_planner') continue ?>
    <?php echo $form[$name]->renderRow() ?>
  			<?php endforeach; ?>
	<tr>
      <td colspan="1"><label>Last Modifier:</label>
      </td>
      <td colspan="1"><label><?php echo $cdt_comments->getLastModifier() ?></label>
      </td>
    </tr>
	<tr>
      <td colspan="1"><label>Updated at:</label>
      </td>
      <td colspan="1"><label><?php echo $cdt_comments->getUpdatedAt() ?></label>
      </td>
    </tr>
</table>

    <?php include_partial('comments/form_actions', array('cdt_comments' => $cdt_comments, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </form>
</div>
