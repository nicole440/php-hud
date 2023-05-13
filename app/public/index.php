<?php
include 'calculations.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<title>HUD-1 Settlement Statement</title>
</head>

<body>
	<div class="hud">
		<header>
			<h1>HUD-1 Settlement Statement</h1>
		</header>

		<div class="info">
			asdfjkl;
		</div>
		<form method="post" action="controller.php">
			<table class="buyer-side">
				<thead>
					<tr>
						<th>
							<h2>J. Summary of Borrower's Transaction</h2>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<h3>100. Gross Amount Due from Borrower</h3>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>101. Contract Sales Price</td>
						<td>
							<input name="contract sale price" type="number" />
							<?php printValue($contract_sale_price) ?>
						</td>
					</tr>
					<tr>
						<td>102. Personal Property</td>
						<td>
							<input name="personal property" type="number" />
							<?php printValue($personal_property) ?>
						</td>
					</tr>
					<tr>
						<td>103. Settlement charges to borrower (line 1400)</td>
						<td></td>
					</tr>
					<tr>
						<td>104. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>105. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>Adjustment for items paid by seller in advance</td>
						<td></td>
					</tr>
					<tr>
						<td>106. City/town taxes <input name="tax start date" type="date" /> to <input
								name="tax end date" type="date" /></td>
						<td><input name="tax field" type="number" /></td>
					</tr>
					<tr>
						<td>107. County taxes <input name="tax start date" type="date" /> to <input name="tax end date"
								type="date" /></td>
						<td><input name="tax field" type="number" /></td>
					</tr>
					<tr>
						<td>108. Assessments <input name="tax start date" type="date" /> to <input name="tax end date"
								type="date" /></td>
						<td><input name="tax field" type="number" /></td>
					</tr>
					<tr>
						<td>109. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>110. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>111. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>112. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>120. Gross Amount Due from Borrower</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>200. Amount Paid by or in Behalf of Borrower</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>201. Deposit or earnest money</td>
						<td><input name="deposit" type="number" /></td>
					</tr>
					<tr>
						<td>202. Principal amount of new loan(s)</td>
						<td><input name="deposit" type="number" /></td>
					</tr>
					<tr>
						<td>203. Existing loan(s) taken subject to</td>
						<td><input name="deposit" type="number" /></td>
					</tr>
					<tr>
						<td>204. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>205. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>206. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>207. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>208. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>209. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>Adjustments for items unpaid by seller</td>
						<td></td>
					</tr>
					<tr>
						<td>210. City/town taxes <input name="tax start date" type="date" /> to <input
								name="tax end date" type="date" /></td>
						<td><input name="tax field" type="number" /></td>
					</tr>
					<tr>
						<td>211. County taxes <input name="tax start date" type="date" /> to <input name="tax end date"
								type="date" /></td>
						<td><input name="tax field" type="number" /></td>
					</tr>
					<tr>
						<td>212. Assessments <input name="tax start date" type="date" /> to <input name="tax end date"
								type="date" /></td>
						<td><input name="tax field" type="number" /></td>
					</tr>
					<tr>
						<td>213. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>214. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>215. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>216. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>217. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>218. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>219. <input name="optional field" type="text" /></td>
						<td><input name="optional field" type="number" /></td>
					</tr>
					<tr>
						<td>220. Total Paid by/for Borrower</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>300. Cash at Settlement from/to Borrower</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>301. Gross amount due from borrower (line 120)</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>302. Less amounts paid by/for borrower (line 220)</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>
							<!-- This won't actually be input, per se, but it's just a placeholder for now. The box checked will be determined by the value calculated -->
							<h3>303. Cash <input type="checkbox" name="from borrower"> From <input type="checkbox"
									name="to borrower"> To Borrower</h3>
						</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
				</tbody>
			</table>

			<table class="seller-side">
				<thead>
					<tr>
						<th>
							<h2>K. Summary of Seller's Transaction</h2>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<h3>400. Gross Amount Due to Seller</h3>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>401. Contract Sales Price</td>
						<!-- <input type="hidden" name="method" value="get"> -->
						<td><?php echo printValue($contract_sale_price) ?></td>
					</tr>
					<tr>
						<td>402. Personal Property</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>403. <!--text box--></td>
						<td></td>
					</tr>
					<tr>
						<td>404. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>405. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>Adjustment for items paid by seller in advance</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>406. City/town taxes <!--text field--> to <!--text field--></td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>407. County taxes <!--text field--> to <!--text field--></td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>408. Assessments <!--text field--> to <!--text field--></td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>409. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>410. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>411. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>412. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>420. Gross Amount Due to Seller</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>500. Reductions in Amount Due to Seller</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>501. Excess deposit (see instructions)</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>502. Settlement charges to seller (line 1400)</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>503. Existing loan(s) taken subject to</td>
						<td><input name="loan field" type="number" /></td>
					</tr>
					<tr>
						<td>504. Payoff of first mortgage loan</td>
						<td><input name="payoff field" type="number" /></td>
					</tr>
					<tr>
						<td>505. Payoff of second mortgage loan</td>
						<td><input name="payoff field" type="number" /></td>
					</tr>
					<tr>
						<td>506. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>507. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>508. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>509. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>Adjustments for items unpaid by seller</td>
						<td></td>
					</tr>
					<tr>
						<td>510. City/town taxes <!--text field--> to <!--text field--></td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>511. County taxes <!--text field--> to <!--text field--></td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>512. Assessments <!--text field--> to <!--text field--></td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>513. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>514. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>515. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>516. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>517. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>518. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>519. <!--text field--></td>
						<td></td>
					</tr>
					<tr>
						<td>520. Total Reduction Amount Due Seller</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>600. Cash at Settlement from/to Seller</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>601. Gross amount due from seller (line 420)</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>602. Less reductions in amounts due seller (line 520)</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
					<tr>
						<td>
							<!-- This won't actually be input, per se, but it's just a placeholder for now. The box checked will be determined by the value calculated -->
							<h3>603. Cash <input type="checkbox" name="from borrower"> From <input type="checkbox"
									name="to borrower"> To Seller</h3>
						</td>
						<td><input type="hidden" name="method" value="get"></td>
					</tr>
				</tbody>
			</table>
			<div class="charges">

			</div>
			<button type="submit">Calculate</button>
		</form>
	</div>
</body>

</html>