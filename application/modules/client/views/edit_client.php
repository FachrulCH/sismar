<style>table tr td{border:none!important}
.btn{margin-top: -7px!important;} /*override*/
</style>
<div id="page-wrapper">
 <h3 class="page-header">Add Client</h3>
       
        <form action="<?php echo base_url();?>client/listc/update" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            
            <div class="row">
            <input type="hidden" name="id_client" value="<?php echo $id_client;?>">
            <div class="col-lg-6">
             <div class="panel panel-default">
                <div class="panel-heading">
                    <b>PT</b>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
           
                <div class="form-group">
                    <label class="col-lg-2 control-label">Tipe<font color="#fff">_</font>Client</label>
                    <div class="col-lg-8">
                     <select name="tipe_client" class="form-control">
                        <?php foreach($select_tipe as $st){  
                        
                        $sel = ($st->id_tipe==$client['tipe_client']) ? 'selected' :'';?>
                        <option value="<?php echo $st->id_tipe;?>" <?php echo $sel;?>><?php echo $st->desc_tipe;?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                
                <div class="form-group">
                    <label class="col-lg-2 control-label">Initial</label>
                    <div class="col-lg-8">
                      <input name="initial" class="form-control" value="<?php echo $client['initial']?>" required>
                    </div>
                  </div>
                  
                 
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Nama<font color="#fff">_</font>PT</label>
                    <div class="col-lg-8">
                      <input name="nama_pt" class="form-control" value="<?php echo $client['nama_pt']?>" required> 
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-lg-2 control-label">Alamat</label>
                    <div class="col-lg-8">
                     <textarea class="form-control" name="alamat" required><?php echo $client['alamat']?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Kota</label>
                    <div class="col-lg-8">
                      <input name="kota" class="form-control" value="<?php echo $client['kota']?>" required> 
                    </div>
                  </div>
               
                 </div>
               </div>
            </div> 
           <div class="col-lg-5">
               <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Project</b>
                     <a class="btn btn-success pull-right" title="Add project" onclick="add_project();"><i class="fa fa-plus"></i> Add</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body"  style="min-height:290px!important">
                   <div id="project-wrap">
                       <?php $i=0; foreach($project as $pr){ ?>
                       <div class="form-group" id="row_project<?php echo $i;?>">
                         <div class="col-lg-10">
                         <select name="data[<?php echo $i;?>][project]" class="form-control">
                            <option value="">--select project--</option>
                            <?php foreach($select_project as $pt){  
                            $sel2 = ($pt->id_project==$pr['id_project']) ? 'selected' :'';?>
                                <option value="<?php echo $pt->id_project;?>" <?php echo $sel2;?>><?php echo $pt->nama_project;?></option>
                            <?php } ?>
                          </select>
                         </div>
                         <a href="javascript:;" title="Remove" onclick="del_project(<?php echo $i;?>)" class="a-danger"><i class="fa fa-times"> &nbsp;</i></a>
                      </div>
                      <?php ++$i; } ?>
                      <!--Appended here-->
                  </div>
                </div>
              </div>
            </div><!--end col-->
           
          </div><!--end row-->
          
           <div class="row">
           <div class="col-lg-11">
                
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>PIC</b>
                    <a class="btn btn-success pull-right" title="Add PIC" onclick="add_pic();"><i class="fa fa-plus"></i> Add</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                <table class="table" id="pic-table">
                 <thead>
                    <tr>
                        <th>Nama PIC</th>
                        <th>Telp</th>
                        <th>Email</th>
                        <th>Sales</th>
                    </tr>
                 <thead>
                 <tbody>
                    <?php $j=0; foreach($pic as $pi){ ?>
                    <tr id="pic_row<?php echo $j;?>">
                        <td><input name="data2[<?php echo $j;?>][nama_pic]" class="form-control" value="<?php echo $pi['nama_pic']?>" id="nama_pic0" required></td>
                        <td><input name="data2[<?php echo $j;?>][telp_pic]" class="form-control" value="<?php echo $pi['telp_pic']?>" id="telp_pic0" required></td>
                        <td><input name="data2[<?php echo $j;?>][email_pic]" type="email" class="form-control" value="<?php echo $pi['email_pic']?>" id="email_pic0" required></td>
                        <td>
                          <select name="data2[<?php echo $j;?>][sales_pic]" class="form-control">
                            <?php foreach($select_sales as $ss){
                            $sel3 = ($ss->id_user==$pi['sales_pic']) ? 'selected' :'';?>
                                <option value="<?php echo $ss->id_user;?>" <?php echo $sel3;?>><?php echo $ss->nama;?></option>
                            <?php } ?>
                          </select>
                        </td>
                        <td><a href="javascript:;" title="Remove" onclick="del_pic(<?php echo $j;?>);" class="a-danger"><i class="fa fa-times"></i> &nbsp;</a>
                   
                     </tr>
                     <?php ++$j;} ?>
                 </tbody>
                </table>
                
             </div>
             </div>
             </div>
           </div><!--end row-->
           
           <div class="row">
            <div class="col-lg-6">
            
             <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
             <a href="<?php echo base_url();?>client/listc" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</a>
        
            </div>
           </div><!--end row-->
           
        </form>
</div>
<!-- /#page-wrapper -->
<script>
function del_project(id){
    
    $("#project-wrap #row_project"+id).remove();
}
var $i=<?php echo count($project); ?>;
function add_project(){
    
    var $prj =  '<div class="form-group" id="row_project'+$i+'">'+
                     '<div class="col-lg-10">'+
                    '<select name="data['+$i+'][project]" class="form-control">'+
                        '<option value="">--select project--</option>'+
                        <?php foreach($select_project as $pr){?>
                            '<option value="<?php echo $pr->id_project;?>"><?php echo $pr->nama_project;?></option>'+
                        <?php } ?>
                      '</select>'+
                    '</div>'+
                    '<a href="javascript:;" title="Remove" onclick="del_project('+$i+')" class="a-danger"><i class="fa fa-times"> &nbsp;</i></a>'+
                  '</div>';
    
    $("#project-wrap").append($prj);
    
++$i;
}
function del_pic(id){

    $("#pic-table tbody #pic_row"+id).remove();
}
$j=<?php echo count($pic); ?>;
function add_pic(){

    var $pic =  '<tr id="pic_row'+$j+'">'+
                    '<td><input name="data2['+$j+'][nama_pic]" class="form-control" id="nama_pic'+$j+'"></td>'+
                    '<td><input name="data2['+$j+'][telp_pic]" class="form-control" id="telp_pic'+$j+'"></td>'+
                    '<td><input name="data2['+$j+'][email_pic]" type="email" class="form-control" id="email_pic'+$j+'"></td>'+
                    '<td>'+
                      '<select name="data2['+$j+'][sales_pic]" class="form-control">'+
                        <?php foreach($select_sales as $ss){?>
                            '<option value="<?php echo $ss->id_user;?>"><?php echo $ss->nama;?></option>'+
                        <?php } ?>
                      '</select>'+
                    '</td>'+
                    '<td><a href="javascript:;" title="Remove" onclick="del_pic('+$j+');" class="a-danger"><i class="fa fa-times"></i> &nbsp;</a>'+
                   
                    
                    '</tr>';
                   
   $("#pic-table tbody").append($pic);
 ++$j;
}

</script>
