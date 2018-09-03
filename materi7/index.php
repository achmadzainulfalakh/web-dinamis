<?php
require 'database.php';

include "./page/header.php";
?>
<!--Main layout-->
<main class="mt-5 pt-5">
	<div class="container">

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