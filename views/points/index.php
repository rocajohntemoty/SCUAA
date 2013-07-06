<div class="row-fluid">
	<a href="points&create">  Create School </a>
	<table>
    	<thead>
        	<Tr>
            	<Th> Gold </Th>
                <th> Silver </th>
            	<th> Bronze </th>
            </Tr>
        </thead>
        <tbody>
			<?php 
				if(isset($vars) && !empty($vars)){
					foreach( $vars as $key => $values){ 
					?>
						<tr>
							<td><?php echo $values["gold"]; ?></td>
							<td><?php echo $values["silver"]; ?></td>
							<td><?php echo $values["bronze"]; ?></td>
							<td>
								<a href="index.php?school&edit&id=".<?php echo $values['schoolID']; ?>> Edit </a>&nbsp;
								<a href="index.php?school&deleteid=".<?php echo $values['schoolID']; ?>> Delete </a>
							</td>
						</tr>
					<?php
					}
				}else{
					?>
						<tr>
							<td> Empty </td>
						</tr>
					<?php
				}
				
			?>
        </tbody>
    </table>
</div>