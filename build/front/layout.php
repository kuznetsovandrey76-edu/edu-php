<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="front/css/style.css">
    <title><?= $title ?></title>
</head>
<body>
    <header class="header">
        <?php echo $_SERVER['HTTP_HOST']; ?>
    </header>
    <div class="main">

        <div class="main__content">
            <?= $content ?>        
        </div>   

    </div>
    <footer class="footer">
    
    <?php

    Class User
    {
        public $name;
        public $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function showName() 
        {
            return $this->name;
        }
    }
    
    $me = new User('Irina', 14);

    echo $me->showName();
    ?>


    </footer>
    
</body>
</html>