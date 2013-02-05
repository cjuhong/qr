<td>
  <ul class="sf_admin_td_actions">
    <?php if ($sf_user->hasCredential(array(  0 => 'edit',))): ?>
<?php echo $helper->linkToEdit($api, array(  'credentials' =>   array(    0 => 'edit',  ),  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
<?php endif; ?>

    <?php if ($sf_user->hasCredential(array(  0 => 'delete',))): ?>
<?php echo $helper->linkToDelete($api, array(  'credentials' =>   array(    0 => 'delete',  ),  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
<?php endif; ?>


      <?php if ($sf_user->hasCredential(array(  0 => 'create_user',))): ?>

	<?php if(!$api->getIsApproved()): ?>
    <li class="sf_admin_action_approve">
<?php echo link_to(__('Approve', array(), 'messages'), 'api/ListApprove?id='.$api->getId(), array()) ?>

<?php else: ?>
    <li class="sf_admin_action_approve">
<?php echo link_to(__('Disapprove', array(), 'messages'), 'api/ListDisapprove?id='.$api->getId(), array()) ?>
	<?php endif; ?>

	<?php endif; ?>

    </li>
    <li class="sf_admin_action_publish">
      <?php if ($sf_user->hasCredential(array(  0 => 'create_user',))): ?>
	<?php if(!$api->getIsPublished()): ?>
	<?php echo link_to(__('Publish', array(), 'messages'), 'api/ListPublish?id='.$api->getId(), array()) ?>
	<?php else: ?>
	<?php echo link_to(__('Dispublish', array(), 'messages'), 'api/ListDispublish?id='.$api->getId(), array()) ?>
	<?php endif; ?>
	<?php endif; ?>
    </li>

  </ul>
</td>
