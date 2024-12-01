<div id="job-list" class="profile-section" style="display: none;">
                <div class="job-header">
                    <h2>Danh sách công việc</h2>
                    <p>Đây là trạng thái danh sách việc làm của bạn</p>
                    <button id="add-new-job-btn" class="btn-add-job">+ Tạo việc mới</button>
                </div>
                <table class="job-table">
                    <thead>
                        <tr>
                            <th>Vai trò</th>
                            <th>Trạng thái</th>
                            <th>Ngày đăng tải</th>
                            <th>Ngày đến hạn</th>
                            <th>Loại công việc</th>
                            <th>Ứng viên</th>
                            <th>Nhu cầu</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                        foreach($list_all_job as $key => $value) {
                            $statusClass = ($value['status'] === 'open') ? 'open' : 'close';
                            $job_type;
                            switch ($value['Job_Type']) {
                                case 'fulltime':
                                    $job_type = 'fulltime';
                                  break;
                                case 'parttime':
                                    $job_type = 'parttime';
                                  break;
                                case 'remote':
                                    $job_type = 'remote';
                                  break;
                                case 'internship':
                                    $job_type = 'internship';
                                  break;
                                default:
                                    $job_type = 'contract';
                            }
                    ?>

                        <tr>
                            <td class="job-title"><a href="http://localhost/job_finder_website/recruiter/jobbyid/?id=<?php echo $value['job_id']; ?>"><?php echo $value['job_title']; ?></a></td>
                            <td><span class="badge <?php echo $statusClass; ?> "><?php echo ucwords($value['status']); ?></span></td>
                            <td><?php echo $value['posted_date']; ?></td>
                            <td><?php echo $value['deadline']; ?></td>
                            <td><span class="badge <?php echo $job_type ?>"><?php echo $value['Job_Type']; ?></span></td>
                            <td><?php echo $value['total_applied']; ?></td>
                            <td><?php echo $value['Accepted_Applicants']; ?> / <?php echo $value['required_candidates']; ?></td>
                            <td><a href="">...</a></td>
                        </tr>

                    <?php
                        }
                    ?>

                    </tbody>
                </table>
            </div>