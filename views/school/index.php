<div class="row-fluid">
	<a href="school&create">  Create School </a>
	<table>
    	<thead>
        	<Tr>
            	<Th> Logo </Th>
                <th> School Name </th>
            	<th> Action </th>
            </Tr>
        </thead>
        <tbody>
			<?php 
				if(isset($vars)){
					foreach( $vars as $key => $values){ 
					?>
						<tr>
							<td>
								<img src="<?php echo "content/img/".$values["image"]; ?>" title="school Logo" height="100" />
							</td>
							<td><?php echo $values["name"]; ?></td>
							<td>
								<a href="index.php?school&edit&id=".<?php echo $values['schoolID']; ?>> Edit </a>&nbsp;
								<a href="index.php?school&deleteid=".<?php echo $values['schoolID']; ?>> Delete </a>
							</td>
						</tr>
					<?php
					}
				}
			?>
        </tbody>
    </table>
</div>