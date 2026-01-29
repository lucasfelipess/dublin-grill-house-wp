<h3>
	<?php _e( 'How to use this plugin?', 'mabel-business-hours-indicator' ) ?>
</h3>

<p>
	<?php _e( 'There are 3 ways you can include this plugin to your website: ', 'mabel-business-hours-indicator' ); ?>
</p>
<ul style="list-style:disc;margin-left:20px;">
    <li><?php _e('If you\'re using a <a href="https://wordpress.org/documentation/article/block-themes/" target="_blank">WordPress Block Theme</a>, our plugin includes 4 Blocks you can add anywhere that supports it.', 'mabel-business-hours-indicator' ) ?></li>
    <li><?php _e('Via <a href="https://codex.wordpress.org/Shortcode" target="_blank">Shortcodes</a>.', 'mabel-business-hours-indicator' ) ?></li>
    <li><?php _e('Via PHP code (only recommended if you\'re using a custom theme).', 'mabel-business-hours-indicator' ) ?></li>
</ul>

<table class="form-table">
    <tr>
        <th><?php _e('Blocks','business-hours-indicator'); ?></th>
        <td>
            <code>
                [BHI] opening hours overview<br/>
                [BHI] opening hours indicator<br/>
                [BHI] Show only when open<br/>
                [BHI] Show only when closed
            </code>
            <div class="p-t-2">
				<span class="extra-info">
					<?php _e('There are 4 different blocks available. You can use them anywhere in your site that supports the new WordPress Block system.','business-hours-indicator');?>.
				</span>
            </div>
        </td>
    </tr>
	<tr>
		<th><?php _e('Indicator shortcode','business-hours-indicator'); ?></th>
		<td>
			<code>
				[mbhi location="your location name"]
			</code>
			<div class="p-t-2">
				<span class="extra-info">
					<?php _e('Use this shortcode to display the open/closed indicator anywhere in your posts or on your pages','business-hours-indicator');?>.
				</span>
			</div>
		</td>
	</tr>
	<tr>
		<th><?php _e('Indicator shortcode for themes','business-hours-indicator');?></th>
		<td>
			<code>
				&lt;?php
				echo do_shortcode('[mbhi location="your location name"]');
				?&gt;
			</code>
			<div class="p-t-2">
				<span class="extra-info">
					<?php _e('This code allows you to use the indicator directly in your theme','business-hours-indicator');?>.
				</span>
			</div>
		</td>
	</tr>
	<tr>
		<th><?php _e('Business hours shortcode','business-hours-indicator');?></th>
		<td>
			<code>
				[mbhi_hours location="your location name"]
			</code>
			<div class="p-t-2">
				<span class="extra-info">
					<?php _e('Use this shortcode to display your opening hours anywhere in your posts or on your pages','business-hours-indicator');?>.
				</span>
			</div>
		</td>
	</tr>
	<tr>
		<th><?php _e('Business hours shortcode for themes','business-hours-indicator');?></th>
		<td>
			<code>
				&lt;?php
				echo do_shortcode('[mbhi_hours location="your location name"]');
				?&gt;
			</code>
			<div class="p-t-2">
				<span class="extra-info">
					<?php _e('This code allows you to show your opening times directly in your theme','business-hours-indicator');?>.
				</span>
			</div>
		</td>
	</tr>
	<tr>
		<th><?php _e('"if open" shortcode','business-hours-indicator');?></th>
		<td>
			<code>
				[mbhi_ifopen location="your location name"]
				   Your content...
				[/mbhi_ifopen]
			</code>
			<div class="p-t-2">
				<span class="extra-info">
					<?php _e('Use this shortcode to display something only when your business is currently open','business-hours-indicator');?>.
				</span>
			</div>
		</td>
	</tr>
	<tr>
		<th><?php _e('"if closed" shortcode','business-hours-indicator');?></th>
		<td>
			<code>
				[mbhi_ifclosed location="your location name"]
				   Your content...
				[/mbhi_ifclosed]
			</code>
			<div class="p-t-2">
				<span class="extra-info">
					<?php _e('Use this shortcode to display something only when your business is currently closed','business-hours-indicator');?>.
				</span>
			</div>
		</td>
	</tr>
	<tr>
		<th></th>
		<td>
			<a href="https://www.studiowombat.com/kb-category/business-hours-indicator/?utm_source=bhifree&utm_medium=plugin&utm_campaign=info" target="_blank"><?php _e('Read the documentation','business-hours-indicator');?></a> <?php _e('to find out all available options for shortcodes','business-hours-indicator');?>.
		</td>
	</tr>
</table>