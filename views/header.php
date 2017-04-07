
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Главная</title>
    <link href="/views/css/bootstrap.min.css" rel="stylesheet">
    <link href="/views/css/font-awesome.min.css" rel="stylesheet">
    <link href="/views/css/prettyPhoto.css" rel="stylesheet">
    <link href="/views/css/price-range.css" rel="stylesheet">
    <link href="/views/css/animate.css" rel="stylesheet">
    <link href="/views/css/main.css" rel="stylesheet">
    <link href="/views/css/responsive.css" rel="stylesheet">
     </head>

    <body>
        <header id="header">
           

            <div class="header-middle">
                <div class="container">
                    <div class="row">
                      
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">     
                                    <li><a href="/"><i class="fa fa-shopping-cart"></i> Головна</a></li>
                                    <li><a href="/account"><i class="fa fa-shopping-cart"></i> Особистий кабінет</a></li>
                                    <li><a href="/registration"><i class="fa fa-user"></i> Реєстрація</a></li> 
                                    <?php
                                    if( isset( $_SESSION['user'] ) ) { ?>
                                    <img src="/files/avatars/avatar_<?=$_SESSION['user']?>.jpg" style="max-width:50px;" alt="">
    <?=$_SESSION['user_name']?>
                                    <li> <a href="/logout">Вихід</a></li>
                                    <?php } 
                                    else  { ?>
                                    <li><a href="/login"> <i class="fa fa-lock"></i> Вхід</a></li> 
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
            </header>
        </body>
        </html>
        <?php
        if(isset($_SESSION['flash_msg'])){
            echo $_SESSION['flash_msg'];
            unset($_SESSION['flash_msg']);
        }
        ?>














