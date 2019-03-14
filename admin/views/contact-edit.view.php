<form class="mt-4" action="contact-edit.php?id=<?php echo e($message["id"]); ?>" method="POST">
<div class="form-group">
    <label for="inputDate">Datum</label>
    <input name="timestamp_date" type="date" class="form-control" value="<?php echo e(date("Y-m-d", $message["timestamp"])) ?>" required="required" id="inputDate">
  </div>
  <div class="form-group">
    <label for="inputTime">Uhrzeit</label>
    <input name="timestamp_time" type="text" class="form-control" value="<?php echo e(date("H:i:s", $message["timestamp"])) ?>" required="required" id="inputTime">
  </div>
  <div class="form-group">
    <label for="inputEmail">Email address</label>
    <input name="email" type="email" class="form-control" id="inputEmail" value="<?php echo e($message["email"]); ?>">
  </div>
  <div class="form-group">
    <label for="inputName">Name</label>
    <input name="name" type="text" class="form-control" id="inputName" value="<?php echo e($message["name"]); ?>">
  </div>
  <div class="form-group">
    <label for="inputSubject">Subject</label>
    <input name="subject" type="text" class="form-control" id="inputSubject" value="<?php echo e($message["subject"]); ?>">
  </div>
  <div class="form-group">
    <label for="inputMessage">Message</label>
    <textarea name="message" class="form-control" id="inputMessage" rows="5"><?php echo e($message["message"]); ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>