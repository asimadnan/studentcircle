    <!-- Page Content -->


    <div class="container ">
   <div class="row ">
      <!-- left column -->
            <div class="col-md-3" style="padding-top:100px;padding-bottom:100px">
                      <div class="text-center">
                      
                        <img class="smaller-image" alt="avatar" src="<?php echo base_url() ?>uploads/<?php echo $pic_path; ?>" /> 
                        <h3><?php echo $firstname;?> <?php echo $lastname;?></h3>
                        
                        
                      </div>
            </div>
      
      <!-- edit form column -->
                  <div class="col-md-9 personal-info" style="padding-top:100px;padding-bottom:100px;text-align:right">

                    
                    <button type="button" class="btn btn-info"><a href="<?=site_url('editprofile')?>">Edit profile</a></button>
                   <button type="button" class="btn btn-info"><a href="<?=site_url('changepassword')?>">Change password</a></button>
                                    <ul>
                                        <div class="text-center">
                                          <h3 >First Name :<?php echo $firstname;?></h3>
                                        </div>

                                        <div class="text-center">
                                          <h3 >Last Name :<?php echo $lastname;?></h3>
                                        </div>

                                        <div class="text-center">
                                          <h3 >Username :<?php echo $u_name;?></h3>
                                        </div>

                                        <div class="text-center">
                                          <h3 >Email :<?php echo $emailId;?></h3>
                                        </div>

                                        <div class="text-center">
                                          <h3>Batch : 22</h3>
                                        </div>

                                        <div class="text-center">
                                          <h3>Faculty : FCSE</h3>


                                        </div>
                                    </ul>



                  </div>

                </div>
<hr>


               

