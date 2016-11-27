<section class="content">
  <div class="row">        
    <form role="form" action="http://project.dev/admin/sanpham/create" method="post">
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">New Product</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên sản phẩm</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm" type="text" name="tensanpham"> 
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kích thước</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Kích thước" type="text" name="kichthuoc">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Băng Tần</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Băng Tần" type="text" name="bangtan">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">CPU</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="CPU" type="text" name="cpu">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">GPU</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="GPU" type="text" name="gpu">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Bộ nhớ trong</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Bộ nhớ trong" type="text" name="bonhotrong">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">RAM</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="RAM" type="text" name="ram">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Cảm Biến</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Cảm Biến" type="text" name="cambien">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Blutooth</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Blutooth" type="text" name="bluetooth">
            </div>


            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input id="exampleInputFile" type="file" name="image">
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
              <input class="form-control" id="exampleInputEmail1" placeholder="Âm thanh" type="text" name="amthanh">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">WLAN</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="WLAN" type="text" name="wlan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">GPS</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="GPS" type="text" name="gps">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Pin</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Pin" type="text" name="pin">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Màn hình</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Màn hình" type="text" name="manhinh">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Camera Trước</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Camera Trước" type="text" name="camera_truoc">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Camera Sau</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Camera Sau" type="text" name="camera_sau">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Quay phim</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Quay phim" type="text" name="quayphim">
            </div>
            <div class="form-group" >
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


          </div>
          <!-- /.box-body -->


          <div class="box-footer">
            <button type="submit" class="btn btn-primary">CREATE</button>
          </div>
          <!-- /.box-footer -->
        </div>
      </form>
    </div>

