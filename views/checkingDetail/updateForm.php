
    <?php require_once('Header.php'); ?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100"><div class="newdetailobject">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">แก้ไขข้อมูลรายการรายละเอียดการตรวจ</th>
							</tr>
						</thead>
						<tbody>
							<form method="get" action="">
                                <tr>
                                    <td class="column1"><input type="text" name="checkingDetailID" value="<?php echo $checkingDetail->id; ?>"></td>  
                                    <td class="column2"><input type="date" name="date" value="<?php echo $checkingDetail->date; ?>"></td>
                                    <td class="column3"><input type="text" name="comment" value="<?php echo $checkingDetail->comment; ?>"></td>
                                    <td class="column4">
                                        <select name="drug" value="<?php echo $checkingDetail->cdDrugID; ?>">
                                            <?php 
                                            foreach($drug_List as $d){
                                                echo "<option value=$d->id";
                                                if($d->id==$checkingDetail->cdDrugID){echo " selected='selected' ";}
                                                echo ">$d->dName</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="column5"><input type="text" name="dose" value="<?php echo $checkingDetail->cdDose; ?>"></td>
                                    <td class="column6">
                                        <select name="physician" value="<?php echo $checkingDetail->cdPhyID; ?>">
                                            <?php 
                                            foreach($physician_List as $p){
                                                echo "<option value=$p->id";
                                                if($p->id==$checkingDetail->cdPhyID){echo " selected='selected' ";}
                                                echo ">$p->phyName</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="column7">
                                        <select name="assessment" value="<?php echo $checkingDetail->cdAssID; ?>">
                                            <?php 
                                            foreach($assessment_List as $a){
                                                echo "<option value=$a->id";
                                                if($a->id==$checkingDetail->cdAssID){echo " selected='selected' ";}
                                                echo ">$a->id</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
									<td class="column8">
    								<button type="submit" name="action" value="index">ย้อนกลับ</button>
    								<button type="submit" name="action" value="update">ยืนยัน</button>
									</td>
									<input type="hidden" name="controller" value="checkingDetail"/>
                                    <input type="hidden" name="checkingDetailID" value="<?php echo $checkingDetail->id; ?>"/>
                                </tr>
							</form>
						</tbody>
					</table>
				</div></div>
			</div>
		</div>
	</div>
