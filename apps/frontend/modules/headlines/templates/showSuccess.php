<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $mgto_headlines->getId() ?></td>
    </tr>
    <tr>
      <th>Image:</th>
      <td><?php echo $mgto_headlines->getImage() ?></td>
    </tr>
    <tr>
      <th>Show image:</th>
      <td><?php echo $mgto_headlines->getShowImage() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $mgto_headlines->getTitle() ?></td>
    </tr>
    <tr>
      <th>Start date:</th>
      <td><?php echo $mgto_headlines->getStartDate() ?></td>
    </tr>
    <tr>
      <th>End date:</th>
      <td><?php echo $mgto_headlines->getEndDate() ?></td>
    </tr>
    <tr>
      <th>Last modifier:</th>
      <td><?php echo $mgto_headlines->getLastModifier() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $mgto_headlines->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $mgto_headlines->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('headlines/edit?id='.$mgto_headlines->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('headlines/index') ?>">List</a>
