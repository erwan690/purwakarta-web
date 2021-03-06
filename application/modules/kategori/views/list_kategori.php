   
<?php $msg = $this->session->flashdata('msg'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-success" >

                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
                <?php $msg = $this->session->flashdata('msg1'); if((isset($msg)) && (!empty($msg))) { ?>
                <div class="alert alert-error" >

                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                <?php print_r($msg); ?>
                </div>
                <?php } ?>
		
          <div class="callout callout-info" style="margin-top: 20px;">
            <h4>Makanan Khas Purwakarta</h4>
           <!--  <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prevents extra unwanted scrolling.</p> -->
          </div>
          <div class="box" style="padding: 15px;">


                  <div class="box-header">
                  <h3 class="box-title">List Kategori</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">

                  <a href="<?php echo base_url();?>kategori/add_kategori" class="btn btn-primary"  style="float:right; margin-bottom: 10px;">Add Kategori</a><br>
    

                      <table class="table table-bordered" style="padding: 10px; border: 1px solid #666;">
                      <tr style="padding: 10px;"> 
                        <th style="text-align:center; padding: 10px; background-color:#4C9ED9; color: #fff;">
                          Image
                        </th>
                        <th style="text-align:center; padding: 10px; background-color:#4C9ED9; color: #fff;">
                          Nama Kategori
                        </th>
                        <th width="300" style="text-align:center; padding: 10px; background-color:#4C9ED9; color: #fff;">
                          Action
                        </th>
                      </tr>

                   
                      <?php foreach($kategori as  $p):?>
      
                      <tr style="border-bottom: 1px solid #666;">
                        <td style="text-align:center;padding: 10px;">
                            <img class="responsive" width="150" src="<?php echo base_url();?><?php echo $p->image; ?>">
                        </td>
                        <td style="padding: 10px;">
                            <p> <?php echo $p->nama_kategori; ?> </p>
                        </td>
                        <td style="text-align:center;padding: 10px;">
                          <a class="btn btn-warning"  href="<?php echo base_url();?>kategori/edit_kategori/<?php echo $p->id_kategori?>">Edit</a>
                          <a class="btn btn-danger"  href="#del_<?php echo $p->id_kategori?>" data-toggle="modal">Delete</a>

                        </td>
                
                      </tr>
                        <div class="modal fade" id="del_<?php echo $p->id_kategori;?>" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true" >   
                        <form action="<?php echo base_url();?>kategori/delete_kategori" method="post" data-parsley-validate>
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
                                              <input type="hidden" name="id" value="<?php echo $p->id_kategori;?>">
                                             
                                               <button type="submit" class="btn btn-primary">Yes</button>
                                              <button class="btn btn-default"  data-dismiss="modal">No</button>
                                        </div>
                                    </div>
                                </div>
                                       

                            </div>
                             </form>
                             </div>      
                      <?php endforeach; ?>
            
                   
                     </table>
                        </div>

                    </div>