<table class="table">
  <thead>
    <tr>
      <th scope="col">Timestamp</th>
      <th scope="col">Name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Subject</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($messages as $message): ?>
    <tr>
        <td><?php echo e(date("d.m.Y H:i:s", $message["timestamp"])); ?></td>
        <td><?php echo e($message["name"]); ?></td>
        <td><?php echo e($message["email"]); ?></td>
        <td><?php echo e($message["subject"]); ?></td>
        <td>
          <a href="contact-view.php?id=<?php echo e($message["id"]); ?>">Show</a>
          <a href="contact-edit.php?id=<?php echo e($message["id"]); ?>">Edit</a>
          <form action="contact-delete.php" method="post">
          <input name="id" type="hidden" id="inputSubject" value="<?php echo e($message["id"]); ?>">
          <button type="submit" class="btn btn-link">Delete</button>
          </form>
        </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>