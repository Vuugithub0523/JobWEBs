<?php
    if (isset($msg)) {
        echo 'Thêm thành công';
    }
?>
<form autocomplete="off" action="http://localhost/job_finder_website/recruiter/insertjob" method="POST">
    <input type="hidden" value="2" name="recruiter_id">
    <label for="">
        Tên công việc
        <input type="text" required name="job_title">
    </label>
    <br>
    <input type="hidden" name="job_type_id" value="1">
    <input type="hidden" name="category_id" value="1">
    <input type="hidden" name="status" value="open">
    <label for="">
        Cấp bậc
        <input type="text" required name="level">
    </label>
    <br>
    <label for="">
        Mô tả
        <input type="text" required name="job_description">
    </label>
    <br>
    <label for="">
        Trách nhiệm
        <input type="text" required name="responsibilities">
    </label>
    <br>
    <label for="">
        Yêu cầu
        <input type="text" required name="requirements">
    </label>
    <br>
    <label for="">
        Vị trí
        <input type="text" required name="location">
    </label>
    <br>
    <input type="hidden" name="benefit_id" value="1">
    <label for="">
        Lương
        <input type="number" required name="salary">
    </label>
    <br>
    <label for="">
        Ngày đăng
        <input type="datetime-local" required name="posted_date">
    </label>
    <br>
    <label for="">
        Hạn chót
        <input type="datetime-local" required name="deadline">
    </label>
    <br>
    <label for="">
        Số lượng yêu cầu
        <input type="number" required name="required_candidates">
    </label>
    <br>
    <label for="">
        Tổng đơn đã nộp
        <input type="number" required name="total_applied"  >
    </label>
    <br>
    <button type="submit">Thêm</button>
</form>