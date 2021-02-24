<?php 
$data=
[
   [
     'name' => 'ahmed hamdy',
      'job' => 'front-end',
     'experience' => 3
    ],
 
    [
        'name' => 'mohammed shaker',
        'job' => 'back-end',
        'experience' => 2
    ],
 
    [
        'name' => 'ali hasan',
        'job' => 'full-stack',
        'experience' => 4
    ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<?php foreach($data as $userdata){ ?>

<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title"><?php echo $userdata['name']; ?></h5>
<h6 class="card-subtitle mb-2 text-muted"><?php echo $userdata['job']; ?></h6>
<p class="card-text"><?php echo $userdata['experience']; ?></p>

</div>
</div>
<?php } ?>
</body>
</html>