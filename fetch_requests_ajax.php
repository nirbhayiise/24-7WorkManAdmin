<?php
include_once 'class.php';
$user = new User();
$res = $user->getrequrestList();
$filter = isset($_GET['filter']) ? strtolower(trim($_GET['filter'])) : '';

while($row=mysqli_fetch_array($res))
{
    if($filter !== '') {
        $searchString = strtolower((string)$row['e_id'] . ' ' . (string)$row['security_code'] . ' ' . (string)$row['c_first_name'] . ' ' . (string)$row['c_last_name'] . ' ' . (string)$row['c_phone'] . ' ' . (string)$row['c_email'] . ' ' . (string)$row['pro_name'] . ' ' . (string)$row['s_name'] . ' ' . (string)$row['c_address']);
        if (strpos($searchString, $filter) === false) {
            continue;
        }
    }

    $cat_id=$row['e_id'];
    $scan_flag=$row['scan_flag'];
    $cat_status = isset($row['cat_status']) ? $row['cat_status'] : '';
        $work_status=$row['work_status'];
            $cancellation_flag=$row['cancellation_flag'];
            $accept_tech=$row['accept_tech'];
    
?>
<div class="col-xl-3 col-lg-4 col-md-6 mb-4 request-item-card" data-req-id="<?php echo $row['e_id']; ?>">
    <div class="card premium-card h-100">
        <div class="premium-card-header d-flex justify-content-between align-items-center">
            <strong class="text-primary" style="font-size: 1.1rem;">#<?php echo $row['e_id']; ?> <span class="text-muted" style="font-size: 0.75em; font-weight:normal;">(<?php echo $row['security_code']; ?>)</span></strong>
            <small class="text-secondary font-weight-bold" style="background: rgba(0,0,0,0.05); padding: 4px 10px; border-radius: 12px;"><i class="fa fa-calendar text-info"></i> <?php echo date('M d, Y', strtotime($row['e_created'])); ?></small>
        </div>
        <div class="card-body">
            <h5 class="card-title text-dark mb-1 font-weight-bold" style="font-size: 1.25rem;"><?php echo $row['pro_name']; ?></h5>
            <h6 class="card-subtitle mb-3 text-info" style="font-size: 0.95rem; font-weight: 500;"><?php echo $row['s_name']; ?></h6>
            
            <div class="customer-info-box mb-3">
                <strong class="d-block mb-1 text-dark" style="font-size: 1rem;"><i class="fa fa-user-circle text-primary"></i> <?php echo $row['c_first_name'].' '.$row['c_last_name']; ?></strong>
                <div class="text-muted" style="font-size: 0.85rem; line-height: 1.5;">
                    <div><i class="fa fa-envelope-o" style="width:15px; color:#6c757d;"></i> <?php echo $row['c_email']; ?></div>
                    <div><i class="fa fa-phone" style="width:15px; color:#28a745;"></i> <?php echo $row['c_phone']; ?></div>
                    <div class="mt-1"><i class="fa fa-map-marker" style="width:15px; color:#dc3545;"></i> <?php echo $row['c_address']; ?></div>
                </div>
            </div>
            
            <div class="mb-3 p-3 rounded" style="background: rgba(0,0,0,0.02); border: 1px dashed rgba(0,0,0,0.1);">
                <strong class="text-dark d-block mb-1" style="font-size:0.85rem; text-transform:uppercase; letter-spacing:0.5px;">Details</strong>
                <p class="text-muted mb-0" style="font-size:0.9rem; line-height:1.5;"><?php echo $row['details']; ?></p>
            </div>
            
            <div class="d-flex mb-4">
                <a role="button" data-toggle="modal" data-target="#largeImgBox" style="cursor:pointer" class="mr-3">
                    <img onclick='$("#model_img").attr("src","<?php echo empty($row['photo1'])? 'https://workman247.com/serviceadmin/upload/defaultpic.jpg' : 'https://workman247.com/serviceadmin/upload/'.$row['photo1']; ?>")' src="<?php echo empty($row['photo1'])? 'https://workman247.com/serviceadmin/upload/defaultpic.jpg' : 'https://workman247.com/serviceadmin/upload/'.$row['photo1']; ?>" class="image-preview" width="80" height="80" />
                </a>
                <a role="button" data-toggle="modal" data-target="#largeImgBox" style="cursor:pointer">
                    <img onclick='$("#model_img").attr("src","<?php echo empty($row['photo2'])? 'https://workman247.com/serviceadmin/upload/defaultpic.jpg' : 'https://workman247.com/serviceadmin/upload/'.$row['photo2']; ?>")' src="<?php echo empty($row['photo2'])? 'https://workman247.com/serviceadmin/upload/defaultpic.jpg' : 'https://workman247.com/serviceadmin/upload/'.$row['photo2']; ?>" class="image-preview" width="80" height="80" />
                </a>
            </div>

            <div class="status-actions mb-4">
                <?php if($work_status=='1'){ ?>
                    <?php if($cancellation_flag==-1 && $accept_tech==-1){ ?>
                        <span class="badge badge-danger p-2 px-3 rounded-pill shadow-sm" style="font-size: 0.85rem;"><i class="fa fa-times-circle"></i> Rejected By Technician</span>
                    <?php }else if($cancellation_flag==1 && $accept_tech==1){ ?>
                        <span class="badge badge-danger p-2 px-3 rounded-pill shadow-sm" style="font-size: 0.85rem;"><i class="fa fa-times-circle"></i> Rejected By Customer</span>
                    <?php }else{ ?>
                        <span class="badge badge-warning p-2 px-3 rounded-pill text-white shadow-sm" style="font-size: 0.85rem;"><i class="fa fa-clock-o"></i> Waiting</span>
                    <?php } ?>
                <?php } else if($work_status=='2') { ?>
                    <span class="badge badge-primary p-2 px-3 rounded-pill shadow-sm" style="font-size: 0.85rem;"><i class="fa fa-hourglass-half"></i> Alloted Tech Waiting</span>
                <?php } else if($work_status=='3') { ?>
                    <span class="badge badge-info p-2 px-3 rounded-pill shadow-sm text-white" style="font-size: 0.85rem;"><i class="fa fa-handshake-o"></i> Tech Accepted</span>
                <?php } else if($work_status=='4') { ?>
                    <a class="btn btn-danger btn-sm premium-btn text-light shadow-sm" onClick="faultanaly('<?php echo $cat_id;?>')"><i class="fa fa-wrench"></i> Fault Analysis</a>
                <?php } else if($work_status=='5') { ?>
                    <span class="badge badge-success p-2 px-3 rounded-pill shadow-sm" style="font-size: 0.85rem;"><i class="fa fa-check-circle"></i> Completed</span>
                <?php } ?>
            </div>
            
            <div class="action-buttons d-flex flex-wrap pt-3" style="gap: 10px; border-top: 1px solid rgba(0,0,0,0.05);">
                <?php if($work_status=='4'){ ?>
                    <a class="btn btn-outline-success btn-sm premium-btn" onClick="faultanaly('<?php echo $cat_id;?>')"><i class="fa fa-list"></i> View Fault List</a>
                <?php } ?>
                
                <?php if($work_status=='3'){ ?>
                    <a class="btn btn-outline-success btn-sm premium-btn" onClick="faultanaly('<?php echo $cat_id;?>')"><i class="fa fa-bar-chart"></i> View Fault Analysis</a>
                <?php } ?>
                
                <?php if($work_status=='5'){ ?>
                    <a class="btn btn-outline-success btn-sm premium-btn" onClick="faultanaly('<?php echo $cat_id;?>')">Fault Analysis</a>
                    <a class="btn btn-outline-info btn-sm premium-btn" onClick="invoiceview('<?php echo $cat_id;?>')"><i class="fa fa-file-text-o"></i> Invoice</a>
                    <a class="btn btn-outline-secondary btn-sm premium-btn" onClick="feedbackview('<?php echo $cat_id;?>')"><i class="fa fa-comments-o"></i> FeedBack</a>
                <?php } ?>
                
                <?php if($cancellation_flag==1 && $accept_tech==1){ ?>
                    <a class="btn btn-outline-primary btn-sm premium-btn" onClick="vw('<?php echo $cat_id;?>')"><i class="fa fa-refresh"></i> Re-Assign</a>
                <?php }else if($cancellation_flag==-1 && $accept_tech==-1){ ?>
                    <a class="btn btn-outline-primary btn-sm premium-btn" onClick="vw('<?php echo $cat_id;?>')"><i class="fa fa-refresh"></i> Re-Assign</a>
                <?php }else{ ?>
                    <a class="btn btn-primary btn-sm premium-btn shadow-sm" onClick="vw('<?php echo $cat_id;?>')"><i class="fa fa-eye"></i> View Request</a>
                    <?php if($scan_flag=="0"){ ?>
                        <a class="btn btn-outline-dark btn-sm premium-btn" onClick="byPassQR('<?php echo $cat_id;?>')"><i class="fa fa-qrcode"></i> By Pass QR</a>
                    <?php }else{ ?>
                        <a class="btn btn-secondary btn-sm premium-btn text-light" style="pointer-events: none;" onClick="byPassQR('<?php echo $cat_id;?>')"><i class="fa fa-qrcode"></i> QR Bypassed</a>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
