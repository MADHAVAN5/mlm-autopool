<?php 
    function check_sponsor_id($sps_id)
    {
        global $conn;
        $data = mysqli_query($conn,"SELECT * FROM `agent` WHERE `agent_id` = '$sps_id'");
        // $data = mysqli_num_rows($data);
        if(mysqli_num_rows($data) == 1)
        {
            return true;
        }
        return false;
    }

    function check_mobile($mobile)
    {
        global $conn;
        $data = mysqli_query($conn,"SELECT * FROM `agent` WHERE `agent_mobile` = '$mobile'");
        // $data = mysqli_num_rows($data);
        if(mysqli_num_rows($data) == 1)
        {
            return false;
        }
        return true;
    }

    function check_valid_user_id($agent_id)
    {
        global $conn;
        $data = mysqli_query($conn,"SELECT * FROM `agent` WHERE `agent_id` = '$agent_id'");
        // $data = mysqli_num_rows($data);
        if(mysqli_num_rows($data) == 1)
        {
            return true;
        }
        return false;
    }

    function check_user_active_or_not($agent_id)
    {
        global $conn;
        $data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `agent` WHERE `agent_id` = '$agent_id'")); 
        if($data['status'])
        {
            return false;
        }
        return true;
    }

    function check_pin_valid_or_not($pin)
    {
        global $conn;
        $data = mysqli_query($conn,"SELECT * FROM `pins` WHERE `pin_value` = '$pin'");
        if (mysqli_num_rows($data)==1) {
            $data = mysqli_fetch_array($data);
            if (!$data['pin_status']) {
                return true;
            }
        }
        return false;
    }

    function level_income_distribute($agent_id)
    {
        global $conn;
        $sponsor_id = get_spons_id($agent_id);
        $package = mysqli_query($conn,"SELECT `package` FROM `agent` WHERE `agent_id`='$sponsor_id'");
        if($package=='b-silver' or $package=='b-gold' or $package=='b-diamond' or $package=='b-platinum')
        {
            $amt = 100;
            $time = date("Y-m-d h:i:sa");
            mysqli_query($conn,"UPDATE `agent_income` SET `wallet`=`wallet`+$amt WHERE `agent_id`='$sponsor_id'");
            mysqli_query($conn,"INSERT INTO `wallet_history`(`agent_id`, `amt`, `desp`, `date_time`, `status`) VALUES ('$sponsor_id','$amt','Referral Income','$time','0')");
        }
        $a=1;
        while ($a <= 5 && $sponsor_id!=0)
        {
            $package = mysqli_query($conn,"SELECT `package` FROM `agent` WHERE `agent_id`='$sponsor_id'");
            $time = date("Y-m-d h:i:sa");
            $level = [5,4,3,2,1];
            // $amt = $level[$a-1];
            if ($package=='b-silver') {
                $amt = 100;
                mysqli_query($conn,"UPDATE `agent_income` SET `wallet`=`wallet`+$amt WHERE `agent_id`='$sponsor_id'");
                mysqli_query($conn,"INSERT INTO `wallet_history`(`agent_id`, `amt`, `desp`, `date_time`, `status`) VALUES ('$sponsor_id','$amt','Level Income','$time','0')");
            }
            $sponsor_id = get_spons_id($sponsor_id);
            ++$a;
        }
    }

    function insert_in_matrix_autopool($agent_id)
    {
        global $conn;
        $query = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `matrix_autopool` WHERE `left_pos`='' OR `mid_pos`='' OR `right_pos`=''"));
        $placement_id = $query['agent_id'];
        $position = ($query['left_pos']=='')?'left_pos':(($query['mid_pos']=='')?'mid_pos':'right_pos');
        mysqli_query($conn,"INSERT INTO `matrix_autopool`(`agent_id`, `placement_id`) VALUES ('$agent_id','$placement_id')");
        mysqli_query($conn,"UPDATE `matrix_autopool` SET `$position`='$agent_id' WHERE `agent_id` = '$placement_id'");
        distribute_level_for_autopool($agent_id);
    }

    function distribute_level_for_autopool($agent_id)
    {
        global $conn;
        $data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `matrix_autopool` WHERE `agent_id`='$agent_id'"));
        $parent_id = $data['placement_id'];
        $a=0;
        while ($a <= 2 && $parent_id!='0') {
            $time = date("Y-m-d h:i:sa");
            $level = [5,4,3];
            // $amt = $level[$a-1];
            $amt = 100;
            mysqli_query($conn,"UPDATE `agent_income` SET `wallet`=`wallet`+$amt WHERE `agent_id`='$parent_id'");
            mysqli_query($conn,"INSERT INTO `wallet_history`(`agent_id`, `amt`, `desp`, `date_time`, `status`) VALUES ('$parent_id','$amt','Matrix autopool Level Income','$time','0')");
            $data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `matrix_autopool` WHERE `agent_id`='$parent_id'"));
            $parent_id = $data['placement_id'];
        }
    }

    function get_spons_id($agent_id)
    {
        global $conn;
        $data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `agent` WHERE `agent_id`='$agent_id'"));
        return $data['sponsor_id'];
    }

?>