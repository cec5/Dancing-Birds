<!-- header.php -->
<html lang="en">
<head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Dancing Birds</title>
    	<base href="/">
    	<!-- Bootstrap CSS -->
    	<link href="common/css/bootstrap.min.css" rel="stylesheet">
    	<style>
		html, body {
    			height: 100%;
    			margin: 0;
    			padding: 0;
		}

		body {
    			display: flex;
    			flex-direction: column;
    			min-height:100vh;
		}

		.page-wrapper {
    			display: flex;
    			flex-direction: column;
    			flex: 1;
		}
		
		main {
			flex: 1;
		}
		
		footer {
    			flex-shrink: 0;
		}
	</style>
</head>
<body>
<div class="page-wrapper">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Dancing Birds</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Main navigation items on the left -->
                <ul class="navbar-nav me-auto">
                    <!-- Search Link -->
                    <li class="nav-item"><a class="nav-link" href="search.php">Search Birds</a></li>
                </ul>
            </div>
        </div>
	</nav>
    <script src="common/js/bootstrap.bundle.min.js"></script>