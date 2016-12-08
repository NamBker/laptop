<?php if ($users): ?>

	<h2>Viewing <?php echo $users->id; ?></h2>

	<p>
		<strong>Title:</strong>
		<?php echo $users->username; ?></p>
		<p>
			<strong>Slug:</strong>
			<?php echo $users->address; ?></p>
			<p>
				<strong>Summary:</strong>
				<?php echo $users->phone; ?></p>
<?php else: ?>
<p>No Hoidaps.</p>

<?php endif; ?>
