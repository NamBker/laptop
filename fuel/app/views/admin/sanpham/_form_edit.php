<section class="content">
  <div class="row">
    <form role="form" action="http://project.dev/admin/sanpham/edit/<?php echo $sanpham->id ?>" method="post" >
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit product</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên sản phẩm</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" type="text" value="<?php echo $sanpham->tensanpham ?  $sanpham->tensanpham : '' ?>" name="tensanpham" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kích thước</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Kích thước" type="text" value="<?php echo $sanpham->kichthuoc ?  $sanpham->kichthuoc : '' ?>" name="kichthuoc">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Băng Tần</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Băng Tần" type="text"  value="<?php echo $sanpham->bangtan ?  $sanpham->bangtan : '' ?>" name="bangtan">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">CPU</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="CPU" type="text" value="<?php echo $sanpham->cpu ?  $sanpham->cpu : '' ?>" name="cpu">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">GPU</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="GPU" type="text" value="<?php echo $sanpham->gpu ?  $sanpham->gpu : '' ?>" name="gpu">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Bộ nhớ trong</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Bộ nhớ trong" type="text" value="<?php echo $sanpham->bonhotrong ?  $sanpham->bonhotrong : '' ?>" name="bonhotrong">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">RAM</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="RAM" type="text" value="<?php echo $sanpham->ram ?  $sanpham->ram : '' ?>" name="ram">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Cảm Biến</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Cảm Biến" type="text" value="<?php echo $sanpham->cambien ?  $sanpham->cambien : '' ?>" name="cambien">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Blutooth</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Blutooth" type="text" value="<?php echo $sanpham->bluetooth ?  $sanpham->bluetooth : '' ?>" name="bluetooth">
            </div>


            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input id="exampleInputFile" type="file">
            </div>

          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <div class="col-md-6">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Technical parameters</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Âm thanh</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Âm thanh" type="text" value="<?php echo $sanpham->amthanh ?  $sanpham->amthanh : '' ?>" name="amthanh">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">WLAN</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="WLAN" type="text" value="<?php echo $sanpham->wlan ?  $sanpham->wlan : '' ?>" name="wlan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">GPS</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="GPS" type="text" value="<?php echo $sanpham->gps ?  $sanpham->gps : '' ?>" name="gps">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Pin</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Pin" type="text" value="<?php echo $sanpham->pin ?  $sanpham->pin : '' ?>" name="pin">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Màn hình</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Màn hình" type="text" value="<?php echo $sanpham->manhinh ?  $sanpham->manhinh : '' ?>" name="manhinh">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Camera Trước</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Camera Trước" type="text" value="<?php echo $sanpham->camera_truoc ?  $sanpham->camera_truoc : '' ?>" name="camera_truoc">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Camera Sau</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Camera Sau" type="text" value="<?php echo $sanpham->camera_sau ?  $sanpham->camera_sau : '' ?>" name="camera_sau">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Quay phim</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Quay phim" type="text" value="<?php echo $sanpham->quayphim ?  $sanpham->quayphim : '' ?>" name="quayphim">
            </div>
            <div class="form-group">
              <label>Category</label>
              <select class="form-control" name="category">
                <option>Samsung</option>
                <option>Sony</option>
                <option>LG</option>
                <option>Iphone</option>
                <option>Xizaomi</option>
                <option>HTC</option>
                <option>Asus</option>
                <option>Oppo</option>
                <option>Lenovo</option>
              </select>
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Quantity</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Quantity" type="text" value="<?php echo $sanpham->quantity ?  $sanpham->quantity : '' ?>" name="quantity">
            </div>


          </div>
          <!-- /.box-body -->


          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
          <!-- /.box-footer -->
        </div>
      </form>

    </div>
