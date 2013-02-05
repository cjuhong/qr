<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@banner_group') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
      <?php include_partial('bannergroup/form_fieldset', array('bannergroup' => $banner_group, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
    <?php endforeach; ?>

<table>
	<tr>
      <td colspan="1"><label>Last Modifier:</label>
      </td>
      <td colspan="1"><label><?php echo $banner_group->getLastModifier() ?></label>
      </td>
    </tr>
	<tr>
      <td colspan="1"><label>Updated at:</label>
      </td>
      <td colspan="1"><label><?php echo $banner_group->getUpdatedAt() ?></label>
      </td>
    </tr>
</table>

    <?php include_partial('bannergroup/form_actions', array('bannergroup' => $banner_group, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </form>
</div>
