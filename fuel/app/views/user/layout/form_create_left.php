<div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Quick Example</h3>
    </div>
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input id="exampleInputFile" type="file">
          <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Different Height</h3>
    </div>
    <div class="box-body">
      <input class="form-control input-lg" placeholder=".input-lg" type="text">
      <br>
      <input class="form-control" placeholder="Default input" type="text">
      <br>
      <input class="form-control input-sm" placeholder=".input-sm" type="text">
    </div>
  </div>

  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Different Width</h3>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-xs-3">
          <input class="form-control" placeholder=".col-xs-3" type="text">
        </div>
        <div class="col-xs-4">
          <input class="form-control" placeholder=".col-xs-4" type="text">
        </div>
        <div class="col-xs-5">
          <input class="form-control" placeholder=".col-xs-5" type="text">
        </div>
      </div>
    </div>
  </div>

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Input Addon</h3>
    </div>
    <div class="box-body">
      <div class="input-group">
        <span class="input-group-addon">@</span>
        <input class="form-control" placeholder="Username" type="text">
      </div>
      <br>
      <div class="input-group">
        <input class="form-control" type="text">
        <span class="input-group-addon">.00</span>
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon">$</span>
        <input class="form-control" type="text">
        <span class="input-group-addon">.00</span>
      </div>
      <h4>With icons</h4>
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
        <input class="form-control" placeholder="Email" type="email">
      </div>
      <br>
      <div class="input-group">
        <input class="form-control" type="text">
        <span class="input-group-addon"><i class="fa fa-check"></i></span>
      </div>
      <br>
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
        <input class="form-control" type="text">
        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
      </div>
      <h4>With checkbox and radio inputs</h4>
      <div class="row">
        <div class="col-lg-6">
          <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox">
            </span>
            <input class="form-control" type="text">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="input-group">
            <span class="input-group-addon">
              <input type="radio">
            </span>
            <input class="form-control" type="text">
          </div>
        </div>
      </div>
      <h4>With buttons</h4>
      <p class="margin">Large: <code>.input-group.input-group-lg</code></p>
      <div class="input-group input-group-lg">
        <div class="input-group-btn">
          <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
            <span class="fa fa-caret-down"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <input class="form-control" type="text">
        </div>
        <p class="margin">Normal</p>

        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-danger">Action</button>
          </div>
          <input class="form-control" type="text">
        </div>
        <p class="margin">Small <code>.input-group.input-group-sm</code></p>

        <div class="input-group input-group-sm">
          <input class="form-control" type="text">
          <span class="input-group-btn">
            <button type="button" class="btn btn-info btn-flat">Go!</button>
          </span>
        </div>
      </div>
    </div>
  </div>