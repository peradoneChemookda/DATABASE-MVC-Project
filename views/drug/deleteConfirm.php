
    <?php require_once('Header.php'); ?>
    <div class="welcome-area" id="welcome">
    <!-- ***** Features Small Item Start ***** -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
            <div class="features-small-item">
                <div class="icon">
                    <i><img src="assets/images/362-3620680_delete-icon-png-download-.png" width="60" height="60" alt=""></i>
                </div>
                <h5 class="features-title">คุณต้องการลบ "<?php echo"$drug->dName"?>" หรือไม่?</h5>
                <div class="delete">
                <form method="get" action="" >
                    <input type="hidden" name="drugID" value="<?php echo $drug->id; ?>" />
                    <input type="hidden" name="controller" value="drug" />
                    <button type="submit" name="action" value="index">ยกเลิก</button>
                    <button type="submit" name="action" value="delete">ยืนยัน</button>
                </form>
                </div>
            </div>
    </div>
    <!-- ***** Features Small Item End ***** -->
</div>
