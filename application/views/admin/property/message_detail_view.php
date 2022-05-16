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
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $sp_user_Message->username;  ?>" required>
          </div>
          <div class="col-md-6">
            <label for="inputEmail3" class="">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $sp_user_Message->email; ?>" required>
          </div>
        </div>
        <!-- row -->
        <div class="form-group row">
          <div class="col-md-6">
            <label for="inputPhone3" class="">Phone No</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $sp_user_Message->phone; ?>" required>
          </div>
          <div class="col-md-6">
            <label for="inputAddress3" class="">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $sp_user_Message->address;  ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="inputSubject3" class="">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $sp_user_Message->subject; ?>" required>
          </div>

        </div>
        <!-- row -->
        <div class="col-md-12">
          <label for="inputMessage3" class="">Message</label>
          <textarea class="form-control" name="user_query" required>
          <?php echo $sp_user_Message->message; ?>
    </textarea>
        </div>
        <div class="col-md-12 text-right pt-2 pr-3 text-danger">
          <a href="<?php echo base_url(); ?>index.php/message/user_msg_delete?m_id=<?php echo $sp_user_Message->msg_id; ?>"><label class="bg-danger pt-2 pb-2 pl-3 pr-3 btn" for="delete"><strong>Delete</strong></label></a>
        </div>
      </div>
  </div>
  </form>
</div>

</div>