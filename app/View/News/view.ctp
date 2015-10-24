
						

<div class="content_title"><?=$post['News']['title']?></div>

						<div class="date_p">
							<span><?php echo $this->Time->format($post['News']['date'], '%d-%m-%Y', 'invalid'); ?></span>
						</div>
<?=$post['News']['body']?>