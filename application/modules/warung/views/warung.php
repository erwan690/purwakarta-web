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
            <h4>Makanan Khas Purwakarta</h4>
            <!-- <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prevents extra unwanted scrolling.</p> -->
          </div>



<div class="box">
  <div class="box-header">
    <h3 class="box-title">List Warung</h3>
      <div class="pull-right" style="padding-left: 0px;">            
      <a href="<?php echo base_url();?>warung/add_warung" class="navbar-link btn btn-primary navbar-btn">Add Warung</a>    
    </div>
  </div><!-- /.box-header -->
  <div class="box-body">    
    <table class="table table-bordered" id="table"> 
        <thead>
        <tr>
          <th style="text-align:center;  background-color:#4C9ED9; color: #fff;">Image</th>
          <th style="text-align:center;  background-color:#4C9ED9; color: #fff;">Name</th>
          <th style="text-align:center;  background-color:#4C9ED9; color: #fff;">Description</th>

            <th width="200" style="text-align:center;  background-color:#4C9ED9; color: #fff;">Action</th>
        	</tr>
        </thead>
         <?php if(!empty($warung)) { ?>
        <tr>
       
        <?php  $i=1; foreach($warung as $w ):?>
      
        <td style="text-align:center;"><img width="30" src="<?php echo base_url().$w->image;?>"></td>
        <td style="text-align:center;"><?php echo $w->nama_warung;?></td>
        <td style="text-align:center;"><?php echo $w->deskripsi;?></td>

        <td style="text-align:center;" >

        	<a href="<?php echo base_url();?>warung/edit_warung/<?php echo $w->id_warung?>" class="btn btn-warning">Edit</a>
          <a href="<?php echo base_url();?>warung/add_warung_detail/<?php echo $w->id_warung?>" class="btn btn-primary">Detail</a>
        	<a class="btn btn-danger" href="#del_<?php echo $w->id_warung?>" data-toggle="modal">Delete</a>
        </td>
        
        </tr>
           <?php endforeach ;?>
            <?php } else { echo "<tr><td align='center' colspan='4'> EMPTY DATA </td></tr>";} ?>
        </table>
     <?php echo $this->pagination->create_links();?>
          
        <!--Modal Start here-->
      </div>
</div> 
        <?php foreach($warung as $wr):?>  

        <div class="modal fade" id="del_<?php echo $wr->id_warung;?>" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true" >   
          <form action="<?php echo base_url();?>warung/delete_warung" method="post" data-parsley-validate>
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
                                   
                                  </div>
                          
   
                                <input type="hidden" name="id" value="<?php echo $wr->id_warung;?>">
                               
                                 <button type="submit" class="btn btn-primary">Yes</button>
                                <button class="btn btn-default"  data-dismiss="modal">No</button>
                      
                      </div>
                  </div>
                         

              </div>
            </form>
        </div>

                <div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true" >   
          <form action="<?php echo base_url();?>warung/test_war" method="post" data-parsley-validate>
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
                                   
                                  </div>
                          
   
                                <input type="text" name="id" value="<?php echo $wr->id_warung;?>">
                               
                                 <button type="submit" class="btn btn-primary">Yes</button>
                                <button class="btn btn-default"  data-dismiss="modal">No</button>
                      
                      </div>
                  </div>
                         

              </div>
            </form>
        </div>
<?php endforeach;?>
