<table class="table">
  <thead>
    <tr>
      <th scope="col">Timestamp</th>
      <th scope="col">Name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Subject</th>
      <th scope="col">Aktionen</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($messages as $message): ?>
    <tr>
        <td><?php echo e(date("d.m.Y H:i:s", $message["timestamp"])); ?></td>
        <td><?php echo e($message["name"]); ?></td>
        <td><?php echo e($message["email"]); ?></td>
        <td><?php echo e($message["subject"]); ?></td>
        <td><a href="contact-view.php?id=<?php echo e($message["id"]); ?>">Anzeigen</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>