
    <?php require_once('Header.php'); ?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100"><div class="newobject">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">แก้ไขข้อมูลรายการยา</th>
							</tr>
						</thead>
						<tbody>
							<form method="get" action="">
                                <tr>
                                    <td class="column1"><input type="text" name="dtID" value="<?php echo $drug->id; ?>"></td>  
                                    <td class="column2"><input type="text" name="dName" value="<?php echo $drug->dName;?>"></td>
                                    <td class="column3">
                                        <select name="dtID" value="<?php echo $drug->dtID; ?>">
                                            <?php 
                                            foreach($drugTypeList as $dt){
                                                echo "<option value=$dt->id";
                                                if($dt->id==$drug->dtID){echo " selected='selected' ";}
                                                echo ">$dt->dtName</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="column4"><input type="text" name="dDescript" value="<?php echo $drug->dDescript;?>"></td>
									<td class="column5">
    								<button type="submit" name="action" value="index">ย้อนกลับ</button>
    								<button type="submit" name="action" value="update">ยืนยัน</button>
									</td>
									<input type="hidden" name="controller" value="drug"/>
                                    <input type="hidden" name="drugID" value="<?php echo $drug->id?>"/>
                                </tr>
							</form>
						</tbody>
					</table>
				</div></div>
			</div>
		</div>
	</div>