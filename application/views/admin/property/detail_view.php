<section class="content">
    <div class="container-fluid">
        <!-- head -->
        <div class="bg-white shadow-sm p-3 mb-5 bg-white rounded">
                    <div class=" d-flex justify-content-between">
                        <h3 class="ml-3 mt-2"> <strong><i><?php echo $result->p_title;?></i></strong></h3>
                        <h3 class="mt-3 mr-3">$&nbsp;<?php echo $result->p_price;?></h3>
                    </div>
                    <div class="d-flex ml-3 justify-content-between">
                        <div class="d-flex">
                            <h5><span class="badge badge-primary mr-2">Featured</span></h5>
                            <h5><span class="badge badge-danger mr-2">Hot Offer</span></h5>
                            <h5><span class="badge badge-success mr-2">For Sale</span></h5> 
                        </div>  

                        <div class="mr-4">
                        <a href="<?php echo base_url();?>index.php/admin/property/edit?id=<?php echo $result->p_id;?>">
                        <button type="button p-5" class="btn btn-info"><i class="fa-solid fa-pen-to-square mr-3"></i>Edit</button>
                        </a>
                        </div> 
                    </div>          
             <div>
                    <?php
                        $country=[
                        '1'  =>'Pakistan',
                        '2'  =>'India',
                        '3'  =>'Afganistan',
                        '4'  =>'Saudi Arabia',
                        ];
                        $state=[
                        '1'  =>'Jammu&Kashmir',
                        '2'  =>'Bihar',
                        '3'  =>'Asaam',
                        '4'  =>'Andra Pradesh',
                        ];
                        $city=[
                        '1'  =>'MUmbai',
                        '2'  =>'Banglore',
                        '3'  =>'Jaipur',
                        '4'  =>'Delhi',
                        '5'  =>'Srinagar',
                        ];
                        $facing=[
                            "1"  => 'East',
                            "2"  => 'West',
                            "3"  => 'North',
                            "4"  => 'South',
                            "5"  => 'South East',
                            "6"  => 'South West',
                            "7"  => 'North East',
                            "8"  => 'North West',
                            ];     
                        ?>
                    <p class="text-secondary font-weight-bold ml-3"> <i class="fa-solid fa-location-dot mr-2"></i><?php echo $country[$result->p_country].", ".$state[$result->p_state].", ".$city[$result->p_city].", ".$result->p_address; ?>
                        </p>
                 <hr>
            </div>
                <div class="m-5 ">
                    <img src="<?php echo base_url('assets/images/property_image.jpg');?>" class="img-fluid w-100"alt="property image">
                </div>    
        </div>    

    </div>     
 </section>           
            <!-- Description -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-top border-warning">
                    <div div class="card-header">
                        <h3 class="card-title">Description</h3>
                    </div>
                        <div class="card-body">
                            <?php if($result->p_content!=null){
                                echo $result->p_content;
                                }
                                else{
                                    echo'NO description Available!';
                                }
                             ?>
                        </div>
                </div>   
            </div> 
        </div>
    </div>         
           <!-- Address Details -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-top border-warning">
                    <div div class="card-header">
                        <h3 class="card-title">Address Details</h3>
                    </div>
                        <div class="card-body">
                            <!-- row 1 -->
                            <div class="row mb-3">
                                <div class="col-md-3 ">
                                    <h6><strong>Country</strong></h6>
                                </div>
                                <div class="col-md-3 text-center">
                                    <?php echo $country[$result->p_country]; ?>
                                </div>
                                <div class="col-md-3 text-center">
                                    <h6><strong>Pincode</strong></h6>
                                </div>
                                <div class="col-md-3 text-right">
                                <?php echo $result->p_postal_code; ?>
                                </div>
                            </div> 
                              <!--row 2  -->
                             <div class="row mb-3">
                                <div class="col-md-3 ">
                                    <h6><strong>State</strong></h6>
                                </div>
                                <div class="col-md-3 text-center">
                                    <?php echo $state[$result->p_state]; ?>
                                </div>
                                <div class="col-md-3 text-center">
                                    <h6><strong>Address</strong></h6>
                                </div>
                                <div class="col-md-3 text-right">
                                <?php echo $result->p_address;?>
                                </div>  
                            </div>
                            <!-- row 3 -->
                            <div class="row ">
                                <div class="col-md-3 ">
                                    <h6><strong>City</strong></h6>
                                </div>
                                <div class="col-md-3 text-center">
                                    <?php echo $city[$result->p_city]; ?>
                                </div>
                                
                            </div>
                     </div>
                </div>   
            </div> 
        </div>        
                <!-- Other Details -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-top border-warning">
                    <div div class="card-header">
                        <h3 class="card-title">Other Details</h3>
                    </div>
                        <div class="card-body">
                            <!-- row 1 bedrooms,bathrooms-->
                            <div class="row mb-3">
                                <div class="col-md-3 ">
                                    <h6><strong>Bedrooms</strong></h6>
                                </div>
                                <div class="col-md-3 text-center">
                                    <?php echo $result->p_bedrooms; ?>
                                </div>
                                <div class="col-md-3 text-center">
                                    <h6><strong>washrooms</strong></h6>
                                </div>
                                <div class="col-md-3 text-right">
                                    <?php echo $result->p_bathrooms; ?>
                                </div>
                            </div> 
                              <!--row 2  area size,land area-->
                             <div class="row mb-3">
                                <div class="col-md-3 ">
                                    <h6><strong>Area Size</strong></h6>
                                </div>
                                <div class="col-md-3 text-center">
                                    <?php echo $result->p_area_unit; ?>
                                </div>
                                <div class="col-md-3 text-center">
                                    <h6><strong>Land Area</strong></h6>
                                </div>
                                <div class="col-md-3 text-right">
                                    <?php echo $result->p_land;?>
                                </div>  
                            </div>
                            <!-- row 3 land area postfix,garage-->
                            <div class="row mb-3">
                                <div class="col-md-3 ">
                                    <h6><strong>Land Area Postfix</strong></h6>
                                </div>
                                <div class="col-md-3 text-center">
                                    <?php echo $result->p_land_unit; ?>
                                </div>
                                <div class="col-md-3 text-center">
                                    <h6><strong>Garages</strong></h6>
                                </div>
                                <div class="col-md-3 text-right">
                                    <?php echo $result->p_garage;?>
                                </div>    
                            </div>
                            <!-- row 4 garage size ,year-->
                            <div class="row mb-3">
                                <div class="col-md-3 ">
                                    <h6><strong>Garage Size</strong></h6>
                                </div>
                                <div class="col-md-3 text-center">
                                    <?php echo $result->p_garages_unit; ?>
                                </div>
                                <div class="col-md-3 text-center">
                                    <h6><strong>Year Built</strong></h6>
                                </div>
                                <div class="col-md-3 text-right">
                                    <?php echo $result->p_year;?>
                                </div>    
                            </div>
                            <!-- row 5 front facing-->
                            <div class="row ">
                                <div class="col-md-3 ">
                                    <h6><strong>Front Facing</strong></h6>
                                </div>
                                <div class="col-md-3 text-center">
                                    <?php echo $facing[$result->p_front_facing]; ?>
                                </div>
                                   
                            </div>
                        </div>
                </div>   
            </div> 
        </div> 
    </div>   
            <!--private note  -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-top border-warning">
                    <div div class="card-header">
                        <h3 class="card-title">Private Note</h3>
                    </div>
                        <div class="card-body">
                            <?php if($result->p_private_note==null){
                                echo $result->p_private_note;
                                }
                                else{
                                    echo'No Private Note Available!';
                                }
                             ?>
                        </div>
                </div>   
            </div> 
        </div>
    </div>         
    