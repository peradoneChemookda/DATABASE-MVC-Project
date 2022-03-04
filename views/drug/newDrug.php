    <?php require_once('Header.php'); ?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100"><div class="newobject">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">เพิ่มข้อมูลรายการยา</th>
							</tr>
						</thead>
						<tbody>
							<form method="get" action="">
                                <tr>
                                    <td class="column1"><input type="text" name="drugID"></td>  
                                    <td class="column2"><input type="text" name="drugName"></td>
                                    <td class="column3">
                                        <select name="dtID">
                                            <?php 
                                        foreach($drugTypeList as $dt){
                                            echo "<option value=$dt->id>$dt->dtName</option>";
                                        }
                                        ?>
                                        </select>
                                    </td>
                                    <td class="column4"><input type="text" name="drugDescript"></td>
									<td class="column5">
    								<button type="submit" name="action" value="index">ย้อนกลับ</button>
    								<button type="submit" name="action" value="addDrug">ยืนยัน</button>
									</td>
									<input type="hidden" name="controller" value="drug"/>
                                </tr>
							</form>
						</tbody>
					</table>
				</div></div>
			</div>
		</div>
	</div>