<title>..::Boominathan HMVC Codeigniter3 For Beginners::..</title>	
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

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
		

    <div class="row-fluid" style="margin-left:100px">
    
	<div class="col-md-10" >      
      <div class="widget">
        <div class="widget-header">
         <i class="icon-truck"></i>
          <h3>List of students</h3>
        </div>

        <br><br>

 <div class="widget-content" align="center"> 
<table class="table table-bordered" id="table"> 
<thead>
<tr>
	<th style="text-align:center;  background-color:#4C9ED9; color: #fff;">S.NO</th>
	<th style="text-align:center;  background-color:#4C9ED9; color: #fff;">Name</th>
    <th style="text-align:center;  background-color:#4C9ED9; color: #fff;">Address</th>  
    <th style="text-align:center;  background-color:#4C9ED9; color: #fff;">Gender</th> 
    <th style="text-align:center;  background-color:#4C9ED9; color: #fff;">Year of Passing</th>  
	<th style="text-align:center;  background-color:#4C9ED9; color: #fff;">Edit</th>
	<th style="text-align:center;  background-color:#4C9ED9; color: #fff;">Delete</th>
	</tr>
</thead>
<tr>
<?php  $i=1; foreach($student as $s ):?>
<td style="text-align:center;" ><?php echo $s->id;?></td>
<td style="text-align:center;"><?php echo $s->name;?></td>
<td style="text-align:center;"><?php echo $s->address;?></td>
<td style="text-align:center;"><?php echo $s->gender;?></td>
<td style="text-align:center;"><?php echo $s->year;?></td>
<td style="text-align:center;" >
	<a href="<?php echo base_url();?>student/edit_student/<?php echo $s->id?>" class="btn btn-primary">Edit </a>
</td>
<td style="text-align:center;">
	<a class="btn btn-default" href="#del_<?php echo $s->id?>" data-toggle="modal">Delete</a>
</td>
</tr>
<?php endforeach ;?>
</table>
<?php echo $pagination?>
<!--Modal Start here-->
        
<?php foreach($student as $d):?>  

<div class="modal fade" id="del_<?php echo $d->id;?>" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true" >   
<form action="<?php echo base_url();?>student/delete_student" method="post" data-parsley-validate>
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
    
                      <input type="hidden" name="id" value="<?php echo $d->id;?>">
                     
                       <button type="submit" class="btn btn-primary">Yes</button>
                      <button class="btn btn-default"  data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
               

    </div>
     </form>
     </div>
<?php endforeach;?>
