<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="contact-modal-label">Get In Touch!</h4>
      </div>

      <div class="modal-body">
        
        <div id="contact-form" >
          <form class="contact" action="/contact-submit" method="post">
            <div class="form-group">
              <label for="contact-name">Your Name:</label>
              <input type="text" class="form-control input-large" name="contact-name" placeholder="Your name (required)" required>
            </div>
            <div class="form-group">
              <label for="contact-email">Your E-mail:</label>
              <input type="email" class="form-control" name="contact-email" placeholder="user@domain.com (required)" required>
            </div>
            <div class="form-group">
              <label for="contact-phone">Your Phone:</label>
              <input type="text" class="form-control input-large" name="contact-phone" placeholder="Your phone number (optional)">
            </div>
            <div class="form-group">
              <label for="contact-message">Your Message:</label>
              <textarea rows="5" class="form-control" name="contact-message" placeholder="What's on your mind? (required)" required></textarea>
            </div>
            <div class="form-group" id="antispam">
              <label for="url">Your URL to Advertise:</label>
              <input type="text" class="form-control" name="url" placeholder="Leave this blank to prove your humanity">
            </div>
            <input type="hidden" name="save" value="contact">
            <button id="submit" type="submit" class="btn btn-success">Send</button>
          </form>
        </div><!--#contact-form-->

      </div><!--.modal-body-->

    </div><!--.modal-content-->
  </div><!--.modal-dialog-->
</div><!--.modal-->
    