<?php  
?>
<h3>Nhập điểm</h3>
<form method="get" action="<?php echo base_url('input_data/index'); ?>">
   <div class="form-group row">
      <div class="col-sm-3">
         <label for="subjects">Lớp:</label>
         <select name="courses" class="form-control" id="courses">
            <?php
            for($i=0; $i<count($courses_list); $i++)
               echo '<option value="'.$courses_list[$i]->courses_id.'">'.$courses_list[$i]->courses_id.'</option>';
            ?>
         </select>
      </div>
      <div class = "col-sm-4">
         <label for="subjects">Môn học:</label>
         <select name="subjects" class="form-control" id="subjects">
            <?php 
            for($i=0; $i<count($subjects_list); $i++)
               echo '<option value="'.$subjects_list[$i]->subjects_id.'">'.$subjects_list[$i]->name.'</option>';
            ?>
         </select>
      </div>
      <div class = "col-sm-3">
         <label for="method">Hình thức:</label>
         <select name="method" class="form-control" id="method">
            <option value="1">Lí thuyết</option>
            <option value="2">Thực hành</option>
         </select>
      </div>
   </div>
   <div class="form-group">
   </div>
</form>

<!-- Button trigger modal -->
<div class = "form-group">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
      Nhập flie excel
   </button>
   <button type="button" class="btn btn-primary">
      Xóa hết
   </button>
    <button type="button" class="btn btn-primary">
      Thêm
   </button>
   <div class="pull-right">
      <button type="button" class="btn btn-primary">
         Lưu dữ liệu
      </button>
      <button type="button" class="btn btn-primary">
         In bảng điểm
      </button>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Tải tập tin lên</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <?php echo form_open_multipart('input_data/form_validate');?>
         <!--<form method="post" enctype="multipart/form-data" action="<?php //echo base_url('input_data/form_validate'); ?>">-->
            <div class="modal-body">
               <div class="form-group">
                  <label for="inputFile">Chọn tập tin (csv/excel)</label>
                  <input type="file" class="form-control" id="inputFile" name="inputFile" placeholder="Chọn file tải lên">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
               <button type="submit" class="btn btn-primary">Tải lên</button>
            </div>
         </form>
      </div>
   </div>
</div>
<div class ="panel" id="inputContent">
   <?php 
      $this->load->view('input/point_content');
   ?>
</div>