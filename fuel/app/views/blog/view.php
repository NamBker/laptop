<div class="container">
	<div class="rows">
		<div class="col-md-8">
			<h2><?php echo $post->title ?></h2>
 
<p>
    <strong>Posted: </strong><?php echo date('nS F, Y', $post->created_at) ?> (<?php echo Date::time_ago($post->created_at)?>)
    by <?php echo $post->user->username ?>
</p>
 
<p><?php echo nl2br($post->body) ?></p>
 
<hr />
 
<h3 id="comments">Comments</h3>
 
<?php foreach ($post->comments as $comment): ?>
 
    <p><?php echo Html::anchor($comment->website, $comment->name) ?> said "<?php echo $comment->message?>"</p>
 
<?php endforeach; ?>
 
<h3>Write a comment</h3>
 
<?php echo Form::open('blog/comment/'.$post->slug, array('class' => 'form-horizontal')) ?>
	 <div class="row">
		<div class="col-md-1">
	    	<label for="name">Name:</label>
	    </div>
	    <div class="col-md-4">
	    	<div class="input"><?php echo Form::input('name',Input::post('name'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?></div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-1">
	    	<label for="website">Website:</label>
	    </div>
	    <div class="col-md-4">
	    	<div class="input"><?php echo Form::input('website', Input::post('website'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Website')); ?></div>
		</div>
	</div>
	<br>
	 <div class="row">
		<div class="col-md-1">
	    	<label for="email">Email:</label>
	    </div>
	    <div class="col-md-4">
	    	<div class="input"><?php echo Form::input('email', Input::post('email'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?></div>
		</div>
	</div>
	<br>
	 <div class="row">
		<div class="col-md-1">
	    	<label for="message">Comment:</label>
	    </div>
	    <div class="col-md-4">
	    	<div class="input"><?php echo Form::textarea('message', Input::post('message'), array('class' => 'col-md-8 form-control', 'rows' => 4, 'placeholder'=>'Message'
	    )); ?>
	    	</div>
	    </div>
	</div>
	<br>
	 <div class="row">
	 	<div class="col-md-1"></div>
		<div class="col-md-4">
	    	<div class="input"><?php echo Form::submit('submit'); ?></div>
		</div>	 
 	</div>
<?php echo Form::close() ?>
		</div>
	</div>
</div>