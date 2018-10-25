<!Document>
<html>
    <head>
        <!-- <?php require_once 'C:\\wamp\\www\\alspok\\codeacademy\\finaltest\\finaltest.php'; ?> -->
        <link rel="stylesheet" type="text/css" href="finaltest.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <h2>APKLAUSA</h2>
        <div>Jusu IP adresas: <?php echo getIp(); ?></div>
        <?php getIp(); ?>
        <section class='section1'>
            <div class='container'>
                <div class='row justify-content-md-center'>
                    <div class='col-md-6 box flex'>
                        <div>Jūsų vardas, pavardė:</div>
                        <form action='submit'>
                            <input type='text' name='firstName' value=''>
                            <input type='test' name='lastName' value=''><br><br>
                            <input type='submit'>
                            <input type='reset'>
                        </form>
                    </div>    
                    <div class='col-md-6 box'>
                        <div>Kaip gyvenimas?</div>

                    </div>
                </div>
            </div>
        </section>

        <section class='section2 box flex'>
            <div class='container-flex box'>
                <duv class='row justify-content-md-center'>
                    <div class='col-md-4 box'></div>
                    <div class='col-md-4 box'></div>
                    <div class='col-md-4 box'></div>
                </duv>
            </div>
        </section>
    </body>
</html>

<?php
function getIp(){

    $ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
    return $ip;
}

$ip = getIP();
var_dump($ip);