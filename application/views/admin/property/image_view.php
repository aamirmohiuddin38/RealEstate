<div class="wrapper d-md-flex">
    <div class="card w-75">
        <div class="card-header bg-info">
        Add Images
        </div>
        <div class="card-body">
            <form action="" method="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 form-group">
                                        <label for="type">Property</label> <i class="req text-danger"> *</i>
                                            <select name="pd_p_id" class="form-control" id="type">
                                                <option value="">Select Property Type</option>
                                                <option value="1">Office</option>
                                                <option value="2">Shop</option>
                                                <option value="3">Appartment</option>
                                                <option value="4">Multi Family Home</option>
                                                <option value="5">Single Family Home</option>
                                                <option value="6">Studio</option>
                                                <option value="7">Villa</option>
                                                <option value="8">Commercial</option>
                                                <option value="9">Dummy Updated</option>
                                            </select>            
                        </div>  
                                        
                                    <div class="col-md-6 form-group">
                                        <label for="title">Title</label><i class="req text-danger"> *</i>
                                        <input type="text" id="title" class="form-control" placeholder="property title">
                                    </div>
                    </div>                
                                    <div class="row"> 
                                        <div class="col-md-6 form-group">
                                                <label for="inputGroupFile01">Attach file</label><i class="req text-danger"> *(Note: choose only image)</i>
                                                <input type="file" class="form-control" id="inputGroupFile01">
                                            </div>
                                            <div class="col-md-6 form-group text-center pt-4">
                                                <button class="btn btn-info" type="submit">Upload <i class="fa-solid fa-cloud-arrow-up"></i></button>
                                            </div>
                                        </div>
                                    </div>  
                                   
        </form>                         
    </div>
        </div>
        <!-- image Preview -->
        <div class="card ml-3" style="width: 18rem;">
            <div class="card-header bg-info">
                Image Preview
            </div>
                <img class="card-img-top" src="https://t4.ftcdn.net/jpg/04/00/24/31/360_F_400243185_BOxON3h9avMUX10RsDkt3pJ8iQx72kS3.jpg" alt="Card image cap">
    </div>
</div>       
<!-- image list -->
<div class="card">
  <h6 class="card-header bg-info">Property Images</h6>
  <div class="card-body">
      <div class="container border">
          <div class="row text-center">
              <div class="col-3 border p-1 bg-light">
                  <h6>ID</h6>
              </div> 
              <div class="col-3 border p-1 bg-light">
                 <h6> Title</h6>
              </div>   
              <div class="col-3 border p-1 bg-light">
                 <h6> Date</h6>
              </div>
              <div class="col-3 border p-1 bg-light">
                 <h6> Action</h6>
              </div>
          </div>   
          
          <div class="row text-center">
              <div class="col-md-12 p-1">
                  <h6>No data Available!</h6>
              </div> 
             
          </div>    
      </div>    
  </div>