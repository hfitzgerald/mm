
<div id="stats">
	
	<ul>
		<li><strong>total promotional codes</strong>: <?php echo $data['total_codes']; ?></li>
		<li><strong>total redeemed codes</strong>: <?php echo $data['redeemed_codes']; ?></li>
		<li><strong>single entry redemptions</strong>: <?php echo $data['single_entry_redemptions']; ?></li>
		<li><strong>multiple entry redemptions</strong>: <?php echo $data['multiple_entry_redemptions']; ?></li>
    </ul>

	<div id="actions">
		<a href="/stats/all_entries.csv">Download all Contest entries as a CSV</a>
	</div>
			
</div>