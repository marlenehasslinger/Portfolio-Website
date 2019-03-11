<section id="contact" class="contact">
  <div class="container">
    <h3 class="text-center">Contact</h3>
    <p class="text-center text-muted font-italic">I can't wait to hear from you!</p>

    <?php if(isset($_GET['contact']) && $_GET['contact'] == 'success'): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Succesfully sent!</strong> I'll get back to you soon.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>

    <form method="POST" action="contact.php">
      <div class="row">
        <div class="col-12 col-sm-6">
          <input class="form-control mb-3" type="text" name="name" placeholder="Your Name" required />
          <input class="form-control mb-3" type="email" name="email" placeholder="Your E-mail" required />
          <input class="form-control mb-3 mb-sm-0" type="subject" name="subject" placeholder="Subject" required />
        </div>
        <div class="col-12 col-sm-6">
          <textarea class="form-control contact-message" name="message" placeholder="Your Message" required></textarea>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="mt-3 btn btn-primary">Send Message</button>
      </div>
    </form>
  </div>
</section>