
    <?php require_once('Header.php'); ?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100"><div class="newdetailobject">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">เพิ่มข้อมูลรายการรายละเอียดการตรวจ</th>
							</tr>
						</thead>
						<tbody>
							<form method="get" action="">
                                <tr>
                                    <td class="column1"><input type="text" name="checkingDetailID"></td>  
                                    <td class="column2"><input type="date" name="date"></td>
                                    <td class="column3"><input type="text" name="comment"></td>
                                    <td class="column4">
                                        <select name="drug">
                                            <?php 
                                            foreach($drug_List as $d){
                                                echo "<option value=$d->id>$d->dName</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="column5"><input type="text" name="dose"></td>
                                    <td class="column6">
                                    <select name="physician">
                                        <?php 
                                        foreach($physician_List as $p){
                                            echo "<option value=$p->id>$p->phyName</option>";
                                        }
                                        ?>
                                    </select>
                                    </td>
                                    <td class="column7">
                                    <select name="assessment">
                                        <?php 
                                        foreach($assessment_List as $a){
                                            echo "<option value=$a->id>$a->id</option>";
                                        }
                                        ?>
                                    </select>
                                    </td>
									<td class="column8">
    								<button type="submit" name="action" value="index">ย้อนกลับ</button>
    								<button type="submit" name="action" value="addCD">ยืนยัน</button>
									</td>
									<input type="hidden" name="controller" value="checkingDetail"/>
                                </tr>
							</form>
						</tbody>
					</table>
				</div></div>
			</div>
		</div>
	</div>
