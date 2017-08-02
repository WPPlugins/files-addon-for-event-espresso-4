<?php
/* @var $config EE_New_Addon_Config */
?>
<div class="padding">
	<h4>
		<?php _e('File Settings', 'event_espresso'); ?>
	</h4>
	<table class="form-table">
		<tbody>

			<tr>
				<th><?php _e("Reset File Settings?", 'wordfile');?></th>
				<td>
					<?php echo EEH_Form_Fields::select(__('Reset File Settings?', 'event_espresso'), 0, $yes_no_values, 'reset_new_addon', 'reset_new_addon'); ?><br/>
					<span class="description">
						<?php _e('Set to \'Yes\' and then click \'Save\' to confirm reset all basic and advanced Event Espresso New_Addon settings to their plugin defaults.', 'wordfile'); ?>
					</span>
				</td>
			</tr>

		</tbody>
	</table>

</div>

<input type='hidden' name="return_action" value="<?php echo $return_action?>">

