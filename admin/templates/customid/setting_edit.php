<?php
///////////////////////////////////////////////
///      CustomId v1.0 by php-mods.eu       ///
///            Author php-mods.eu           ///
///           Packed at 7/12/2016          ///
///     Copyright (c) 2016, php-mods.eu     ///
///////////////////////////////////////////////

?>
<h3>Edit Database Setting</h3>
<p>This page allows you to edit a database table setting. The database table name should be set without your database table prefix.</p>
<form action="<?php echo adminurl('CustomId/update_setting'); ?>" method="post">
<table id="tabledlist" class="tablesorter">
<thead>
	<tr>
    	<th width="20%">Setting</th>
        <th width="80%">Setting Value</th>
    </tr>
</thead>
<tbody>
	<tr>
    	<td><b>Database Table Name:</b><br /><i>Without the default table prefix.</i></td>
        <td><input type="text" name="table" value="<?php if(isset($error)) echo $table; else echo $data->table_name; ?>" /></td>
    </tr>
    <tr>
    	<td><b>Database Column Name:</b></td>
        <td><input type="text" name="column" value="<?php if(isset($error)) echo $column; else echo $data->column_name; ?>" /></td>
    </tr>
    <tr>
    	<td><input type="hidden" name="id" value="<?php echo $data->id; ?>" /></td>
        <td><input type="submit" value="Update Setting" /></td>
    </tr>
</tbody>
</table>
</form>
<hr />
<p>Copyright &copy; 2016 - Version 1.0 - <a href="http://php-mods.eu" target="_blank">PHP-Mods</a></p>