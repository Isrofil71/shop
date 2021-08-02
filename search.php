<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">

<?php
	require_once "db.php";

?>
	<?php
	if (isset($_GET['s']) && $_GET['s']):
		$search = $_GET['s'];
		 
		$sql = "SELECT * FROM product WHERE name = '".$search."'";
		$query = mysqli_query($conn, $sql);
	?>
	<?php while ($row = mysqli_fetch_assoc($query)): ?>
		<div class="col-md-3">
				<div class="card mt-4">
					<div class="thumbnail" style="border: 1px solid #eee; min-height: 332px; padding: 5px">
						<a href="#">
						<img src="<?= str_replace("../", "", $row['picture']) ?>" alt="Lights" style="width:100%">
						<div class="caption">
							<h4><a href="product.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></h4>
							<p>
								<button class="btn btn-info btn-sm"><?= $row['amount'] ?> so'm</button>
							</p>
							<button class="btn btn-warning add_product btn-sm w-100" data-id="<?= $row['id'] ?>">Cart</button>
						</div>
						</a>
					</div>
				</div>
			</div>
		<?php endwhile ?>
	<?php endif ?>
?>