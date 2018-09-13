<div class="card-header">
	<form method="POST" action="/sendFeed" class="input-group">
		<input type="text" class="form-control" placeholder="Message" name="feed" id="feed">
		<div class="input-group-append">
		  <button type="submit" class="btn btn-secondary">
		    <strong>Написать</strong>
		  </button>
		</div>
	</form>
</div>
<?php if(isset($feeds) && !empty($feeds)) { ?>
	<ul class="list-group card-list-group">
		<?php foreach ($feeds as $feed) { ?>
			<li class="list-group-item py-5">
			<div class="media">
				<div class="media-object avatar avatar-md mr-4" style="background-image: url(/uploads/faces/male/16.jpg)"></div>
				<div class="media-body">
					<div class="media-heading">
						<small class="float-right text-muted"><?= $feed->date ?></small>
						<h5><?= $feed->name ?></h5>
					</div>
					<div>
						<?= $feed->feed ?>
					</div>
				</div>
			</div>
			</li>
		<?php } ?>
	</ul>
<?php } ?>