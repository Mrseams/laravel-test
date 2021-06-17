<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <title><?php echo $__env->yieldContent("title"); ?></title>
</head>
<body>
    <div class="container">
            <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="/">Acceuil</a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="clients">Nos clients</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about">About</a>
                    </li>
                  </ul>
    <?php echo $__env->yieldContent('content'); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\ESPACE-TEK\demo2\resources\views/layout.blade.php ENDPATH**/ ?>