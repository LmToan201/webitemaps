<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<title>Xử lý sửa loại địa điểm - Bản đồ AGU</title>
	</head>
	<body>
		<div class="container">
			<!-- Menu: sử dụng navbar -->
			<?php include 'navbar.php'; ?>
			
			<!-- Nội dung: sử dụng card -->
			<div class="card mt-3">
				<div class="card-header">Xử lý sửa loại địa điểm</div>
				<div class="card-body">
					
				</div>
			</div>
			
			<!-- Footer: tự code -->
			<?php include 'footer.php'; ?>
		</div>
		
		<?php include 'javascript.php'; ?>
		<script type="module">
			import { getFirestore, doc, updateDoc } from 'https://www.gstatic.com/firebasejs/9.6.8/firebase-firestore.js';
			const db = getFirestore();
			const docRef = doc(db, 'loaidiadiem', '<?php echo $_POST['id']; ?>');
			await updateDoc(docRef, {
				MaLoai: <?php echo $_POST['MaLoai']; ?>,
				TenLoai: '<?php echo $_POST['TenLoai']; ?>',
				HinhAnhBanDo: '<?php echo $_POST['HinhAnhBanDo']; ?>'
			});
			location.href = 'loaidiadiem.php';
		</script>
	</body>
</html>