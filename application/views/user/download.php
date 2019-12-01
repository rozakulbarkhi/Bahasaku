<?php
foreach ($materi as m) {
    ?>
    <embed src="<?= base_url() . 'assets/file/' . $m['file']; ?>">

<?php } ?>