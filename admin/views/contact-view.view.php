<dl>
    <dt>ID:</dt>
    <dd><?php echo nl2br(e($message["id"])); ?></dd>
    <dt>Time:</dt>
    <dd><?php echo nl2br(e($message["timestamp"])); ?></dd>
    <dt>E-Mail:</dt>
    <dd><?php echo nl2br(e($message["email"])); ?></dd>
    <dt>Name:</dt>
    <dd><?php echo nl2br(e($message["name"])); ?></dd>
    <dt>Subject:</dt>
    <dd><?php echo nl2br(e($message["subject"])); ?></dd>
    <dt>Message:</dt>
    <dd><?php echo nl2br(e($message["message"])); ?></dd>
</dl>