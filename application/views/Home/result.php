<?php
include_once 'home.php';
?>
<?php
if ($rows != null):
?>
	<table>
		<tr>
			<th>الدرجة</th>
			<th>الاسم</th>
		</tr>
		<?php
		foreach ($rows as $row): ?>
			<tr>
				<td><?php echo $row->grade ?> </td>
				<td><?php echo $row->name ?> </td>
			</tr>

		<?php endforeach ?>
	</table>
<?php endif; ?>
