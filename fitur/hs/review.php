<?php
while ($datareview = mysqli_fetch_assoc($resultreview)) {
    ?>
    <div class="review-card">
        <div class="review-header">
            <div class="review-rating"><?= $datareview['Rating'] ?>/5 ★★★★★</div>
            <div class="review-date"><?= $datareview['Tanggal'] ?></div>
        </div>
        <div class="review-text">
            <?= $datareview['Review'] ?>
        </div>
    </div>
    <?php
}
?>