<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ($pageTitle) ?></title>
    <meta name="description" content="Dynamic Resume">
	<base href="<?= ($BASE) ?>/public/">
    <link rel="stylesheet" href="styles/style.css">

</head>

<body>
	<header>
		<h1 id="pageTitle">LOG IN</h1>
	</header>

	<main id="pageContent">
        <div id="main">

            <form class="col-sm-6 col-sm-offset-3" action="login.php" method="post">
                <div class="form-group">
                    <label for="username" class="control-label">Username</label>
                    <input id="username" name="username" type="text" required="required" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input id="password" name="password" type="text" required="required" class="form-control">
                </div>

                <div class="form-group">
                    <button name="btnSubtmi" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
 
            <!--<?php if ($errors): ?>
                <p class="messages"><?= (implode("<br>", $errors)) ?></p>
            <?php endif; ?>--> 
        
        </div>
    </main>

    
    <script src="public/js/script.js"></script>
</body>

</html>