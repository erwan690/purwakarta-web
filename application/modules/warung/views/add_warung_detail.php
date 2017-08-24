
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
            <!-- <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar is bigger than your content because it prevents extra unwanted scrolling.</p> -->
          </div>
          <div class="box" style="padding: 15px;">

              <div class="box-header">
              <h3 class="box-title">List Warung</h3>
            </div>

        <div id='content' class="tab-content" style="padding: 15px;">
            <ul class="nav nav-tabs" id="myTab" style="margin-bottom: 20px;">

              <li class="active"><a data-target="#fasilitas" data-toggle="tab">Fasilitas</a></li>
              <li><a data-target="#alamat" data-toggle="tab">Alamat</a></li>
              <li><a data-target="#menu" data-toggle="tab">Menu</a></li>
              <li><a data-target="#galeri" data-toggle="tab">Galeri</a></li>
            </ul>
           
            <div class="tab-pane active" id="fasilitas">
              <div class="pull-right" style="margin-bottom: 10px;">

                <?php foreach($warung_detail as  $wd):?>
                <a href="<?php echo base_url();?>warung/add_fasilitas/<?php echo $wd->id_warung?>" class="btn btn-primary">Add Fasilitas</a>
                <?php endforeach;?>
              </div>
        
                    <table class="table-bordered col-md-12" style="padding: 10px;">
                      <tr style="padding: 10px;"> 
                      <th style="text-align:center; padding: 10px; background-color:#4C9ED9; color: #fff;">
                        No
                      </th>
                      <th style="text-align:center; padding: 10px; background-color:#4C9ED9; color: #fff;">
                        Fasilitas
                      </th>
                      <th style="text-align:center; padding: 10px; background-color:#4C9ED9; color: #fff;">
                        Action
                      </th>

                      </tr>
                      
                      <?php $i=1; foreach($fasilitas_warung as  $fa):?>
                      <?php  foreach($fasilitas as  $f):?>
                      <?php if($fa->id_fasilitas == $f->id_fasilitas) {?>
                      <tr>
                      <td style="text-align:center; padding: 10px;">
                       <?php echo $i; ?>
                      </td>
                      <td  style="text-align:center; padding: 10px;">                   
                          <?php echo $f->nama_fasilitas; ?>
                      </td>

                      <td style="text-align:center;padding: 10px;">
                       <a class="btn btn-danger" href="#del_<?php echo $fa->id_fasilitas_warung?>" data-toggle="modal">Delete</a>
                      </td>
                      </tr>
                      <?php } ?>

                       <div class="modal fade" id="del_<?php echo $fa->id_fasilitas_warung;?>" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true" >   
                        <form action="<?php echo base_url();?>warung/delete_fasilitas" method="post" data-parsley-validate>
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
                                              <input type="hidden" name="id_warung" value="<?php echo $fa->id_warung;?>">
                                              <input type="hidden" name="id" value="<?php echo $fa->id_fasilitas_warung;?>">
                                             
                                               <button type="submit" class="btn btn-primary">Yes</button>
                                              <button class="btn btn-default"  data-dismiss="modal">No</button>
                                        </div>
                                    </div>
                                </div>
                                       

                            </div>
                             </form>
                             </div>      

                      <?php endforeach; ?>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                  
                    </table>             
            </div>
            <div class="tab-pane" id="alamat">
              
                  <?php foreach($warung_detail as  $wd):?>
                    <a href="<?php echo base_url();?>warung/add_alamat/<?php echo $wd->id_warung?>" class="btn btn-primary" style="float:right; margin-bottom: 10px;">Add Alamat</a><br>
                    <?php endforeach;?>
                

                  <table class="table-bordered col-md-12" style="padding: 10px;">
                    <tr style="padding: 10px;"> 
                      <th style="text-align:center; padding: 10px; background-color:#4C9ED9; color: #fff;">
                        PUSAT/CABANG
                      </th>
                      <th style="text-align:center; padding: 10px; background-color:#4C9ED9; color: #fff;">
                        Alamat
                      </th>
                      <th style="text-align:center; padding: 10px; background-color:#4C9ED9; color: #fff;">
                        Action
                      </th>
                    </tr> 

                   <?php foreach($alamat_warung as  $aw):?>

                    <tr>
                      <td style="text-align:center; padding: 10px;">
                                           <?php 
                    if($aw->priority == 1) { echo "PUSAT";} else {
                    echo "CABANG";}
                    ?>
                      </td>
                      <td  style="text-align:center; padding: 10px;">                   
                          <?php echo $aw->alamat ?>, Kota <?php echo $aw->kota ?>, Provinsi <?php echo $aw->provinsi ?>
                      </td>

                      <td style="text-align:center;padding: 10px;">
                        <a class="btn btn-warning" href="<?php echo base_url();?>alamat/edit_alamat/<?php echo $aw->id_alamat?>">Edit</a>
                        <a class="btn btn-danger" href="#del_<?php echo $aw->id_alamat?>" data-toggle="modal">Delete</a>
                      </td>
                      </tr>
                    <div class="modal fade" id="del_<?php echo $aw->id_alamat;?>" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true" >   
                      <form action="<?php echo base_url();?>alamat/delete_alamat" method="post" data-parsley-validate>
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
                                            <input type="hidden" name="id_warung" value="<?php echo $aw->id_warung;?>">
                                            <input type="hidden" name="id" value="<?php echo $aw->id_alamat;?>">
                                           
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
           
            <div class="tab-pane" id="menu">

              <table class="table-bordered col-md-12" style="padding: 10px; text-algin:center;">
               <?php foreach($warung_detail as  $wd):?>
              
                    <a href="<?php echo base_url();?>menu/add_menu/<?php echo $wd->id_warung?>" class="btn btn-primary" style="float:right; margin-bottom: 10px;">
                      Add Menu</a><br>
                    <?php if (empty($menu)) { ?>
                    <center>Empty DATA</center>
                    <?php } else { ?> 
                    <?php foreach($menu as  $m):?>
                    <?php if($wd->id_warung == $m->id_warung) {?>
                   
                    <div class="col-md-3" style="padding: 10px;text-algin:center;">
                     <center><img style="padding: 10px;text-algin:center;" class="img-responsive" width="150" src="<?php echo base_url();?><?php echo $m->image; ?>"></center>
                     <center><a href="#del_<?php echo $m->id_menu?>" data-toggle="modal">Delete</a></center>
                    </div>
                 
                    <?php } ?>

                     <div class="modal fade" id="del_<?php echo $m->id_menu?>" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true" >   
                      <form action="<?php echo base_url();?>menu/delete_menu" method="post" data-parsley-validate>
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
                                            <input type="hidden" name="image" value="<?php echo $m->image;?>">
                                            <input type="hidden" name="id_warung" value="<?php echo $m->id_warung;?>">
                                            <input type="hidden" name="id" value="<?php echo $m->id_menu?>">
                                           
                                             <button type="submit" class="btn btn-primary">Yes</button>
                                            <button class="btn btn-default"  data-dismiss="modal">No</button>
                                      </div>
                                  </div>
                              </div>
                                     

                          </div>
                           </form>
                           </div>      
      
                    <?php endforeach; ?>
              <?php } ?>
                    <?php endforeach; ?>
             
                  </table>
            </div>
            <div class="tab-pane" id="galeri">
              <table class="table-bordered col-md-12" style="padding: 10px; text-algin:center;">
               <?php foreach($warung_detail as  $wd):?>
                <a href="<?php echo base_url();?>galeri/add_galeri/<?php echo $wd->id_warung?>" class="btn btn-primary" style="float:right; margin-bottom: 10px;">Add Image</a><br>
                <div class="col-lg-12">
                    <?php foreach($galeri as  $g):?>
                    <?php if($wd->id_warung == $g->id_warung) {?>
                   
                    <div class="col-lg-2">
                     <center><img class="img-responsive" width="150" src="<?php echo base_url();?><?php echo $g->image; ?>"></center>
                     <center><a href="#del_<?php echo $g->id_galeri?>" data-toggle="modal">Delete</a></center>
                    </div>
                 
                    <?php } ?>
                      <div class="modal fade" id="del_<?php echo $g->id_galeri?>" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true" >   
                      <form action="<?php echo base_url();?>galeri/delete_galeri" method="post" data-parsley-validate>
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
                                            <input type="hidden" name="image" value="<?php echo $g->image;?>">
                                            <input type="hidden" name="id_warung" value="<?php echo $g->id_warung;?>">
                                            <input type="hidden" name="id" value="<?php echo $g->id_galeri?>">
                                           
                                             <button type="submit" class="btn btn-primary">Yes</button>
                                            <button class="btn btn-default"  data-dismiss="modal">No</button>
                                      </div>
                                  </div>
                              </div>
                                     

                          </div>
                           </form>
                           </div> 
                    <?php endforeach; ?>
                     </div>
                  <?php endforeach; ?>
                  
                </table>
     
            </div>
          </div>
            
        
        </div>
     
