<?php
// Hiển thị danh sách công việc.
foreach ($jobs as $job) {
    echo "<a href='/jobs/show/{$job['id']}'>{$job['title']}</a><br>";
}
