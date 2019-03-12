<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Parcing</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
        <script src ="script.js"></script>
    </head>
    <body>
        <canvas id="myChart" width="200" height="50"></canvas> 
        <table class="data-table_wrap">
		<?php 
			$dom = new DOMDocument();
			@$dom->loadHTMLFile('http://bhom.ru/currencies/gbp/?startdate=alltime');
			$xpath = new DOMXPath($dom);
			$index = 0;
			/*foreach($xpath->query('//td[@class="tablecell evenrow"]') as $td) {
				if ($index % 2 === 0) {
					echo "<tr class='table__row'>";
					echo "<td class='table__cell'>".$td->nodeValue."</td>";
				} else {
					echo "<td class='table__cell'>".$td->nodeValue."</td>";
					echo "</tr>";
				}
				$index++;
			}*/
			foreach($xpath->query('//td[@class="tablecell oddrow"]') as $td) {
				if ($index % 2 === 0) {
					echo "<tr class='table__row'>";
					echo "<td class='table__cell'>".$td->nodeValue."</td>";
				} else {
					echo "<td class='table__cell'>".$td->nodeValue."</td>";
					echo "</tr>";
				}
				$index++;
			}
		?>
    </table>
    </body>
</html>