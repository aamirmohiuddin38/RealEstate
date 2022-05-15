<!-- <?php
      // print_r($this->session->userdata());
      ?> -->
<div class="card_contact">
  <img src="https://images.unsplash.com/photo-1534536281715-e28d76689b4d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="image" class="image_contact" />
  <div class="head_text_contact">Contact Us</div>
</div>

<div class="container">
  <div class="wrapper-left">
    <div class="row mt-5 mb-3 text-info text-center">
      <div class="col-md-12">
        <h3 class="card-title ">Contact Us</h3>
      </div>
    </div>
    <form>
      <div class="row">
        <div class="form-group col-md-6">
          <label for="FirstName">UserName</label><small class="req text-danger"> *</small>
          <input type="text" class="form-control" id="inputEmail4" value="<?php echo $this->session->userdata('fullname'); ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="LastName">Address</label><small class="req text-danger"> *</small>
          <input type="text" class="form-control" id="inputPassword4" value="<?php echo $this->session->userdata('address'); ?>" required>
        </div>
      </div>
      <div class=" row ">
        <div class=" form-group col-md-6">
          <label for="inputPhone">PhoneNo</label><small class="req text-danger"> *</small>
          <input type="text" class="form-control" id="inputEmail4" value="<?php echo $this->session->userdata('mobile'); ?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label><small class="req text-danger"> *</small>
          <input type="email" class="form-control" value="<?php echo $this->session->userdata('email'); ?>" required>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-12">
          <label for="inputSubject">Subject</label><small class="req text-danger"> *</small>
          <input type="text" class="form-control" placeholder="Enter your subject" required>
        </div>
      </div>
      <div class="row ">
        <div class="form-group col-md-12">
          <label for="inputMessage">Message</label><small class="req text-danger"> *</small>
          <textarea class="form-control" required>
          Enter your query.......!!!!
    </textarea>
        </div>
      </div>
      <div class="row ">
        <div class="form-group mb-5 col-md-12">
          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </div>
      </div>
    </form>
  </div>
  <!-- <div class="right">
    <div class="row">
      <div class="col-md-12">
        <p class="padding-top"><strong>For inquiries</strong><strong>&nbsp;contact:</strong></p>
        <hr>
        <p><strong>Irfan Fayaz</strong><br>Founder<br>Lambert Lane LalChowk, Srinagar<br>9797741062<br>erirfanfayaz@gmail.com</p>
        <p class="padding-top"><strong>Corporate
            Headquarters</strong><br>Lambert Lane LalChowk, Srinagar</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-6 mb-3">
        <button type="button" class="btn btn-primary"><i class="fa-brands fa-facebook"></i></button>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <button type="button" class="btn btn-warning"><i class="fa-brands fa-instagram"></i></button>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <button type="button" class="btn btn-success"><i class="fa-brands fa-twitter"></i></button>
      </div>
      <div class="col-md-3 col-6 mb-3">
        <button type="button" class="btn btn-danger"><i class="fa-brands fa-linkedin"></i></button>
      </div>
    </div>
  </div> -->
</div>
<!-- </body>
</html> -->