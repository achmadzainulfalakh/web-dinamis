<?php
$sql = "SELECT * FROM blog where jenis='linkfacebook'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
                            // output data of each row
    while($row = $result->fetch_assoc()) { 
        $linkfacebook=$row['konten'];
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM blog where jenis='linktwitter'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        $linktwitter=$row['konten'];
    }
} else {
    echo "0 results";
}
?>
<!--Footer-->
<footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">



    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="<?php print $linkfacebook ?>" target="_blank">
            <i class="fa fa-facebook mr-3"></i>
        </a>

        <a href="<?php print $linktwitter ?>" target="_blank">
            <i class="fa fa-twitter mr-3"></i>
        </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        © <?php print date("Y"); ?> Copyright:
        <a href="#"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Initializations -->
<script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
</body>

</html>