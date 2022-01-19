<?php
    include 'config.php';
    if(isset($_GET['order_no'])){
        $id = $_GET['order_no'];

        $sql = "DELETE FROM orders WHERE ORDER_NO=$id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header("Location: orders_list.php");
        }else{
            die(mysqli_error($conn));
        }
    }
    mysqli_close($conn);
?>
<script>
    alert("Deleted Succesfully")
</script>