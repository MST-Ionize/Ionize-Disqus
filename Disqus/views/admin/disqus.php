<div id="maincolumn">
	<h2 class="main disqus"><?=lang('module_disqus_title')?></h2><br>
	<div class="main subtitle">
		<p class="lite">
			<p>
				<code>&lt;ion:disqus:code /&gt;</code>
				<b><?=lang('module_disqus_tag_code');?></b>
			</p>
			<p>
				<code>&lt;ion:disqus:comments_num_code /&gt;</code>
				<b><?=lang('module_disqus_tag_comments_num_code');?></b>
			</p>
			<p>
				<code>&lt;ion:disqus:shortname /&gt;</code>
				<b><?=lang('module_disqus_tag_shortname');?></b>
			</p>
		</p>
	</div>

	<form action="<?php echo admin_url() ?>module/disqus/disqus_config/save">
		<dl>
			<!-- Shortname -->
			<dt>
				<label for="shortname"><?=lang('module_disqus_shortname')?></label>
			</dt>
			<dd>
				<input id="shortname" name="shortname" class="inputtext required" type="text" value="<?=$shortname;?>" data-validators="required"></input>
			</dd>
		</dl>
		<dl>
			<!-- Mobile -->
			<dt>
				<label for="disable_mobile"><?=lang('module_disqus_disable_mobile')?></label>
			</dt>
			<dd>
				<input id="disable_mobile" name="disable_mobile" type="checkbox" <?php if(!$disable_mobile) echo "checked";?> value="0" />
			</dd>
		</dl>
		<br>
		<div class="main subtitle">
			<div class="buttons">
				<button id="save" type="button" class="button yes left"><?php echo lang('ionize_button_save_close') ?></button>
			</div>
		</div>
	</form>

	<script type="text/javascript">
		ION.initToolbox('empty_toolbox');

		$("save").removeEvents('click');
		$("save").addEvent('click', function () {
			ION.HTML(
				'module/disqus/disqus_config/save',
				{
					'shortname': $("shortname").value,
					'disable_mobile': $("disable_mobile").checked ? "0" : "1"
				},
				{ 'update': '' }
			);
		});
	</script>
</div>
