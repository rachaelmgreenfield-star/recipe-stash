<!doctype html>
<html profile="http://www.w3.org/2005/10/profile">
	<head>
		<title>Recipe Book</title>

		<!-- basics -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
		<link rel="icon" type="image/png" href="http://www.jeffreythompson.org/graphics/favicon.png">

		<!-- font and styles -->
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,700,700i,900" rel="stylesheet"> 
		<link href="stylesheet.css" rel="stylesheet" type="text/css">

		<!-- jquery -->
		<!-- loads the recipes and adds the selected one below -->
		<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous">
		</script>
	</head>

	<body>
		<div id="wrapper" class="index">
            <p id="back">
                <a href="index.php">
                    <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                    </svg>
                </a>
            </p>	
			<!-- table of contents -->
			<section id="toc">
				<h1 id="mainTitle"><?php echo $_GET['category'] ?></h1>
				<p id="navigation"></p>

				<ul> <!-- your recipes will go here --> </ul>
			</section>
			
			<!-- footer -->
			<section id="footer"></section>
		</div>
	</body>

    <?php
        $category = $_GET['category']; 
        $files = array_map('basename', glob("recipes/$category/*.md"));
    ?>

	<!-- combo php/js to get all recipes in the folder -->
	<script>	
  	    let files = <?php echo json_encode($files) ?>;
        let category = "<?php echo $_GET['category'] ?>";
	</script>
	
	<!-- javascript does the rest :) -->
	<script src="utils.js"></script>
	<script src="list-recipes.js"></script>
</html>

