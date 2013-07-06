<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SCUAA Administrator</title>
		<link rel="stylesheet" href="../boot/docs/assets/css/bootstrap.css">
		<link rel="stylesheet" href="account.css">
	</head>
	<body>
		<div class="pageBox">
			<header>
				<div class="box">
					<div class="pull-right">
						<div class="user-account">
							Logged In as: <strong>Administrator</strong> <span class="icon-cog"></span>
						</div>
					</div>
					<span class="page-heading">
						<h1>SCUAA 2013 Administrator</h1>
						<span>Hosted by Leyte Normal University</span>
					</span>
				</div>
			</header>
			<section>
				<div class="box clearfix">
					<ul class="mainNav clearfix">
						<li><a href="#">Dashboard</a></li>
						<li><a href="#">Schools</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Sports</a></li>
					</ul>
					<div class="clearfix"></div>
					
					<article>
						<h2>SCUAA 2013 Ranking</h2>
						
						<table class="mytable bordered">
							<thead>
								<th>Rank no.</th>
								<th>School</th>
								<th>Categories</th>
								<th>Sports</th>
								<th>Gold</th>
								<th>Silver</th>
								<th>Bronze</th>
							</thead>
							<tbody>
								<?php for($x=1;$x<=10;$x++){ ?>
								<tr>
									<td>Cell 1</td>
									<td>Cell 2</td>
									<td>Cell 3</td>
									<td>Cell 4</td>
									<td>Cell 5</td>
									<td>Cell 6</td>
									<td>Cell 7</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						
					</article>
				</div>
				<br>
				<div class="box">
					<h2>Statistics</h2>
				</div>
			</section>
			<aside>
			</aside>
			<section>
			</section>
			<div class="pushMe"></div>
		</div>
		<footer>
			<div class="box">
				&copy All rights reserved 2013. SCUAA - Hosted by Leyte Normal University
			</div>
		</footer>
	</body>
</html>