<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify Your Email Address</h2>

        <div>
        
            <?php echo e($name); ?>

            <br>
            Thanks for creating an account with the verification demo app.
            Please follow the link below to verify your email address
            <?php echo e(URL::to('register/verify/' . $key)); ?>.<br/>

        </div>

    </body>
</html>

