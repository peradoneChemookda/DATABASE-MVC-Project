<?php require_once('Header.php'); ?>

    <div class="limiter">
		<div class="container-table100">

		<div class="namemaindata"><strong>รายการยา</strong>
		<div class="adddata">
			<a a href="?controller=drug&action=newDrug" class="main-button-slider">เพิ่มข้อมูล</a>
			<form method="get" action="">
			<div class="search">
    			<input type="text" name="key" placeholder="ค้นหา..">
    			<input type="hidden" name="controller" value="drug"/>
    			<button type="submit" name="action" value="search"><i class="fa fa-search"></i></button>
			</div>
			</form>
		</div>
		</div>
			<div class="wrap-table100">
				<div class="table100">
                    <div class="object">
					<table>
						<thead>
							<tr class="table100-head">
                                <th class="column1">ID</th>
                                <th class="column2">ชื่อยา</th>
                                <th class="column3">ชนิดยา</th>
                                <th class="column4">คำอธิบายยา</th>
								<th class="column5"></th>
								<th class="column6"></th>
							</tr>
						</thead>
						<tbody>
                                <?php foreach($drug_list as $drug)
                                {
                                    ?> <tr>
                                        <td class="column1"> <?php echo "$drug->id"; ?> </td>  
                                        <td class="column2"> <?php echo "$drug->dName"; ?> </td>
                                        <td class="column3"> <?php echo "$drug->dtName"; ?> </td>  
                                        <td class="column4"> <?php echo "$drug->dDescript"; ?> </td>
										<td class="column5">  <a <?php echo "href=?controller=drug&action=updateForm&drugID=$drug->id"?> class="main-button-slider">แก้ไข</a> </td>
										<td class="column6"> <a <?php echo "href=?controller=drug&action=deleteConfirm&drugID=$drug->id"?> class="main-button-slider">ลบ</a> </td>
                                    </tr> <?php
                                }?>
						</tbody>
					</table>
				</div></div>
			</div>
		</div>
	</div>
