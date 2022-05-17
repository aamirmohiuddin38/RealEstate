<!--********************* Header Part ***************** -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Search Results</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--Bootstrap -->
  <link rel="stylesheet" type="text/css" href="fontawesome6/css/all.min.css">
  <!--Fontawsome -->
  <link rel="stylesheet" type="text/css" href="css/slick.css"> <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"> <!-- Slick CSS min -->
  <link rel="stylesheet" type="text/css" href="css/search.css"> <!-- Manual css file -->
  <style>
    .msg-box-inner .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .msg-box-inner .card-title {
      font-size: 1rem;
    }

    .card-body .msg-from {
      display: flex;
      justify-content: space-between;
    }

    @media(max-width: 425px) {
      .card-body .msg-from {
        display: block;
      }
    }
  </style>
</head>

<body>
  <!-- ****************** End Header Part ***************** -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary card-outline msg-box-inner">
          <div class="card-header">
            <h3 class="card-title">Read Message From :<strong>Aamir Malla</strong></h3>
            <div class="card-tools">
              <a href="" class="btn btn-tool" title="Back To Messages"><i class="fas fa-reply"></i></a>
            </div>
          </div>

          <div class="card-body">
            <div class="mailbox-read-info">
              <h5>xyz</h5>
              <h6 class="msg-from">From: aamirmca38@gmail.com <br><span class="mailbox-read-time text-muted">14 May. 2022 10:05 PM</span>
              </h6>
            </div>

            <div class="mailbox-read-message">
              <p>Hello Admin,</p>
              <p>Hello, I am interested in [Property Title Updated1]</p>
              <p>Thanks,<br>Aamir Malla</p>
            </div>
          </div>

          <div class="card-footer">
            <a href="#" type="button" class="btn btn-danger float-right disabled"><i class="far fa-trash-alt"></i> Delete</a>
          </div>
        </div>
      </div>
    </div>


    <!-- *********************** Footer Part ******************************* -->


</body>

</html>
<!-- ************************ End Footer Part ****************************** -->