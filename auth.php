<?php 
//echo $_SESSION['voter_id'];
if (!isset($_SESSION['voter_id'])) {
?>
	<script>
		alert('Invalid User ...');
		window.location = 'index.php';
	</script>
<?php
}
