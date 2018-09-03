<?php
require 'database.php';

include "./page/header.php";
?>
<!--Main layout-->
<main class="mt-5 pt-5">
	<div class="container">

		<!--Section: Jumbotron-->
            <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">

                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        <strong>Learn Bootstrap 4 with MDB</strong>
                    </h1>
                    <p>
                        <strong>Best & free guide of responsive web design</strong>
                    </p>
                    <p class="mb-4">
                        <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written
                            versions available. Create your own, stunning website.</strong>
                    </p>
                    <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
                        <i class="fa fa-graduation-cap ml-2"></i>
                    </a>

                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

            <!--Card : Dynamic content wrapper-->
                        <div class="card mb-4 text-center wow fadeIn">

                            <div class="card-header">Do you want to get informed about new articles?</div>

                            <!--Card content-->
                            <div class="card-body">

                                <!-- Default form login -->
                                <form>

                                    <!-- Default input email -->
                                    <label for="defaultFormEmailEx" class="grey-text">Your email</label>
                                    <input type="email" id="defaultFormLoginEmailEx" class="form-control">

                                    <br>

                                    <!-- Default input password -->
                                    <label for="defaultFormNameEx" class="grey-text">Your name</label>
                                    <input type="text" id="defaultFormNameEx" class="form-control">

                                    <div class="text-center mt-4">
                                        <button class="btn btn-info btn-md" type="submit">Sign up</button>
                                    </div>
                                </form>
                                <!-- Default form login -->

                            </div>

                        </div>
                        <!--/.Card : Dynamic content wrapper-->

            <hr class="my-5">

            

		<!--Section: Cards-->
		<section class="text-center">

			<?php
			$sql = "SELECT * FROM blog where jenis='post'";
			$result = $conn->query($sql);
			$n=0;
			if ($result->num_rows > 0) {
				                            // output data of each row
				while($row = $result->fetch_assoc()) { ?>
					<?php

					if ($n % 3 == 0) { 
						?>
						<!--Grid row-->
						<div class="row mb-4 wow fadeIn">
							<?php       	
						} 
						++$n;
						?>
						<!--Grid column-->
						<div class="col-lg-4 col-md-12 mb-4">

							<!--Card-->
							<div class="card">

								<!--Card image-->
								<div class="view overlay">

									<?php print $row['featuredimage'];?>
									<a href="#">
										<div class="mask rgba-white-slight"></div>
									</a>
								</div>

								<!--Card content-->
								<div class="card-body">
									<!--Title-->
									<h4 class="card-title"><?php print $row['judul'];?></h4>
									<!--Text-->
									<p class="card-text"><?php print $row['konten'];?></p>
								</div>

							</div>
							<!--/.Card-->

						</div>
						<!--Grid column-->
						<?php
						if ($n % 3 == 0) {
							?>
						</div>
						<!--Grid row-->
						<?php       	
					} 
				}
			} else {
				echo "0 results";
			}
			?>

			<!--Pagination-->
			<nav class="d-flex justify-content-center wow fadeIn">
				<ul class="pagination pg-blue">

					<!--Arrow left-->
					<li class="page-item disabled">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>

					<li class="page-item active">
						<a class="page-link" href="#">1
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">5</a>
					</li>

					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
					</li>
				</ul>
			</nav>
			<!--Pagination-->

		</section>
		<!--Section: Cards-->

	</div>
</main>
<!--Main layout-->




<?php
include "./page/footer.php";

$conn->close();