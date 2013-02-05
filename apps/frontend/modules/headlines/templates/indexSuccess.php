<h1>Mgto headliness List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Image</th>
      <th>Show image</th>
      <th>Title</th>
      <th>Start date</th>
      <th>End date</th>
      <th>Last modifier</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mgto_headliness as $mgto_headlines): ?>
    <tr>
      <td><a href="<?php echo url_for('headlines/show?id='.$mgto_headlines->getId()) ?>"><?php echo $mgto_headlines->getId() ?></a></td>
      <td><?php echo $mgto_headlines->getImage() ?></td>
      <td><?php echo $mgto_headlines->getShowImage() ?></td>
      <td><?php echo $mgto_headlines->getTitle() ?></td>
      <td><?php echo $mgto_headlines->getStartDate() ?></td>
      <td><?php echo $mgto_headlines->getEndDate() ?></td>
      <td><?php echo $mgto_headlines->getLastModifier() ?></td>
      <td><?php echo $mgto_headlines->getCreatedAt() ?></td>
      <td><?php echo $mgto_headlines->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('headlines/new') ?>">New</a>