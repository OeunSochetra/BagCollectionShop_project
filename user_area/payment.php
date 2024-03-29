<?php
    include('../includes/connect.php');
    include('../function/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Payment-Page</title>
</head>

<style>
    .payment-img{
        width: 70%;
        margin: auto;
        display: block;
    }
</style>

<body>

    <?php 
        
        $user_ip=getIPAddress();
        $get_user="Select * from `user_table` where user_ip='$user_ip'";
        $result=mysqli_query($con,$get_user);
        $run_query=mysqli_fetch_array($result);
        $user_id=$run_query['user_id'];
    ?>

    <div class="container">
        <h2 class="text-center text-info">Payment Options</h2>

        
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <a href="https://www.paypal.com" target="_blank"><img src="../Image/PayPal.img" alt="" class="payment-img"></a>
                </div>

                <div class="col-md-6">
                    <a href="order.php?user_id=<?php echo $user_id ?>"><h2>Pay Offline</h2></a>
                </div>
            </div>

            

    </div>
</body>
</html>