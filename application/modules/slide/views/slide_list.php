

		            <?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
                <?php $msg = $this->session->flashdata('msg1'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-danger" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
		

                  <div class="callout callout-info" style="margin-top: 20px;">
                    <h4>Satenya Orang Purwakarta</h4>
                    <!-- <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prevents extra unwanted scrolling.</p> -->
                  </div>

                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">List Slide</h3>
                      </div>
                      <div class="box-body">
                           
                                 <a href="<?php echo base_url() ?>/slide/list_album" id="album" class="btn btn-primary"   style="float:right; margin-bottom: 10px;">See Album</a>
    
                          <table class="table table-bordered" id="table"> 
                            <thead>
                            <tr>
                              <th width="100" style="text-align:center;  background-color:#4C9ED9; color: #fff;">NO</th>
                              <th style="text-align:center;  background-color:#4C9ED9; color: #fff;">Name</th>
                                <th width="100" style="text-align:center;  background-color:#4C9ED9; color: #fff;">Action</th>
                              </tr>
                            </thead>
                           
                            <tr>
                            <?php  $i=1; foreach($slide as $s ):?>
       
                            <td style="text-align:center;" ><?php echo $i; ?></td>
                            <td style="text-align:center;"><img width="80" src="<?php echo base_url() ?><?php echo $s->image;?>"></td>
                            <td style="text-align:center;">
                              <a class="btn btn-warning" href="<?php echo base_url() ?>slide/edit_slide_image/<?php echo $s->id_slide?>">edit</a>
                              <a class="btn btn-danger" href="#del_<?php echo $s->id_slide?>" data-toggle="modal">Delete</a>
                            </td>

                            </tr>

                            <div class="modal fade" id="del_<?php echo $s->id_slide;?>" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true" >   
                            <form action="<?php echo base_url();?>slide/delete_slide" method="post" data-parsley-validate>
                             <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                            <h4 class="modal-title" id="myAddLabel">Warning!</h4>
                                        </div>
                                                <div class="modal-body">                
                                                   <div class="box-body">
                                                      <div align="center" class="alert alert-error">
                                                      <h4>Are You Sure to Delete this Details</h4>
                                                      </div><br>
                                                     
                                                    </div><br><br>
                                                  <div align="center"> 
                                
                                                  <input type="hidden" name="id" value="<?php echo $s->id_slide;?>">
                                                 
                                                   <button type="submit" class="btn btn-primary">Yes</button>
                                                  <button class="btn btn-default"  data-dismiss="modal">No</button>
                                            </div>
                                        </div>
                                    </div>
                                           

                                </div>
                                 </form>
                          </div>
                           <?php $i++; ?>
                            <?php endforeach ;?>
                          </table>
                      <?php echo $pagination?>
                    </div>
                      <!--Modal Start here-->
                    </div>
                              
                      <?php foreach($slide as $s):?>  

                      
                      <?php endforeach;?>


           
                                </div>
                            </div>
                        </div>

                    </div>
              <script type="text/javascript">


              $.fn.editable.defaults.mode = 'inline';
             

              $('.fas').editable();

              $(document).on('click','.editable-submit',function(){
            
              var w = $(this).closest('td').children('span').attr('data');
              var x = $(this).closest('td').children('span').attr('id');
              var y = $('.input-sm').val();
              $.ajax({
                url: "<?php echo base_url();?>slide/update_slide",
                type: 'GET',
                data: ({ id : x, name : y }),
                success: function(data){
                 window.location.reload();
                      },
                      error: function(e){
                        alert('Error Processing your Request!!');
                      }
                          
                });
                });


              </script>
   

