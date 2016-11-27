<div class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h2>List Posts</h2>
          <br>
        <?php if ($posts):
          foreach ($posts as $item) {
          ?>
                <div class="blog-post">
                  <div>
                    <h2><a href="/blog/view/<?php echo $item->slug; ?>""><?php echo $item->title;?></h2>
                    </div>
                        <p class="blog-post-meta"><?php echo date('nS F, Y', $item->created_at) ?></p>
                        <p><?php echo Str::truncate($item->body,300); ?></p>
                        <a class="btn btn-default" href="/blog/view/<?php echo $item->slug ?>">View</a>
                      </div><!-- /.blog-post -->
               <?php }
               else: 
               ?>
      <p>No Posts.</p>
      <?php endif; ?>
        </div>


        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>Lời hay ý đẹp</h4>
            <br>
            <p>Không có hiểu biết sẽ khiến bạn trở thành một thứ công cụ cho kẻ khác lợi dụng</p>
            <p>Không có hiểu biết sẽ khiến bạn trở thành một thứ công cụ cho kẻ khác lợi dụng</p>
          </div>
             <br>
           <div class="sidebar-module">
          <h4>Tag</h4>
          <br>
          <ol class="list-unstyled">
            
        </ol>
          </div> 
       </div><!-- /.blog-sidebar -->

  </div><!-- /.row -->


</div>