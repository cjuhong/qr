<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@statistical_day') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
      <?php include_partial('statisticalday/form_fieldset', array('comment' => $comment, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
    <?php endforeach; ?>

<table>
      <td colspan="1"><label>Updated at:</label>
      </td>
      <td colspan="1"><label><?php echo $statistical_day->getUpdatedAt() ?></label>
      </td>
    </tr>
</table>
    <?php include_partial('statisticalday/form_actions', array('statisticalday' => $statistical_day, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </form>
</div>
