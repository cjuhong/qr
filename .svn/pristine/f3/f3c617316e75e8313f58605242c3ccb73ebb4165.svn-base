<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@static_content_category') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
      <?php include_partial('staticcontentcategory/form_fieldset', array('static_content_category' => $static_content_category, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
    <?php endforeach; ?>


<table>


	<tr>
      <td colspan="1"><label>Last Modifier:</label>
      </td>
      <td colspan="1"><label><?php echo $static_content_category->getLastModifier() ?></label>
      </td>
    </tr>
	<tr>
      <td colspan="1"><label>Updated at:</label>
      </td>
  <td colspan="1"><label><?php echo $static_content_category->getUpdatedAt() ?></label>
      </td>
    </tr>
</table>



    <?php include_partial('staticcontentcategory/form_actions', array('static_content_category' => $static_content_category, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </form>
</div>
