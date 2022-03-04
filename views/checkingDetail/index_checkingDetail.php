
<?php require_once('Header.php'); ?>

<div class="limiter">
    <div class="container-table100">

    <div class="namemaindata"><strong>รายการรายละเอียดการตรวจ</strong>
    <div class="adddata">
        <a a href="?controller=checkingDetail&action=newCD" class="main-button-slider">เพิ่มข้อมูล</a>
        <form method="get" action="">
        <div class="search">
            <input type="text" name="key" placeholder="ค้นหา..">
            <input type="hidden" name="controller" value="checkingDetail"/>
            <button type="submit" name="action" value="search"><i class="fa fa-search"></i></button>
        </div>
        </form>
    </div>
    </div>
        <div class="wrap-table100">
            <div class="table100">
                <div class="detailobject">
                <table>
                    <thead>
                        <tr class="table100-head">
                            <th class="column1">ID</th>
                            <th class="column2">วันที่</th>
                            <th class="column3">ข้อคิดเห็น</th>
                            <th class="column4">ยา</th>
                            <th class="column5">จำนวนโดส</th>
                            <th class="column6">แพทย์</th>
                            <th class="column7">Assessment</th>
                            <th class="column8"></th>
                            <th class="column9"></th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach($checkingDetail_list as $cd)
                            {
                                ?> <tr>
                                    <td class="column1"> <?php echo "$cd->id"; ?> </td>  
                                    <td class="column2"> <?php echo "$cd->date"; ?> </td>
                                    <td class="column3"> <?php echo "$cd->comment"; ?> </td>
                                    <td class="column4"> <?php echo "$cd->cdDrugName"; ?> </td>  
                                    <td class="column5"> <?php echo "$cd->cdDose"; ?> </td>
                                    <td class="column6"> <?php echo "$cd->cdPhyName"; ?> </td>  
                                    <td class="column7"> <?php echo "$cd->cdAssID"; ?> </td>
                                    <td class="column8">  <a <?php echo "href=?controller=checkingDetail&action=updateForm&checkingDetailID=$cd->id"?> class="main-button-slider">แก้ไข</a> </td>
                                    <td class="column9"> <a <?php echo "href=?controller=checkingDetail&action=deleteConfirm&checkingDetailID=$cd->id"?> class="main-button-slider">ลบ</a> </td>
                                </tr> <?php
                            }?>
                    </tbody>
                </table>
            </div></div>
        </div>
    </div>
</div>
