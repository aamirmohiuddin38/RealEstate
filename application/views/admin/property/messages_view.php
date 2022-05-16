<!-- !-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Admin</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"></li>
            <li class="breadcrumb-item active">User Messages</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Messages</h3>
    </div>
    <form class="form-horizontal" action="">
      <div class="card-body">
        <!-- row -->
        <div class="form-group row">
          <div class="col-md-6">
            <label for="inputusername3" class="">UserName</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $messages->username;  ?>" required>
          </div>
          <div class="col-md-6">
            <label for="inputEmail3" class="">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $messages->email; ?>" required>
          </div>
        </div>
        <!-- row -->
        <div class="form-group row">
          <div class="col-md-6">
            <label for="inputPhone3" class="">Phone No</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $messages->phone; ?>" required>
          </div>
          <div class="col-md-6">
            <label for="inputAddress3" class="">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $messages->address;  ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="inputSubject3" class="">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $messages->subject; ?>" required>
          </div>

        </div>
        <!-- row -->
        <div class="col-md-12">
          <label for="inputMessage3" class="">Message</label>
          <textarea class="form-control" name="user_query" required>
          <?php echo $messages->message; ?>
    </textarea>
        </div>
      </div>
  </div>
  </form>
</div>

</div>
</body>

</html>