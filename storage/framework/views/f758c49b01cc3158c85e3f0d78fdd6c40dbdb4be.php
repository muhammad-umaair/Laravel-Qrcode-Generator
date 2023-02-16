<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>Laravel QR Code Generator</title>
    </head>
    <body>

    <div class="text-center" style="margin-top: 50px;">
        <h3>Laravel QR Code Generator</h3>
        <div>
            <img src="data:image/png;base64, <?php echo base64_encode(QrCode::format('png')->size(300)->generate('Your value here!')); ?> ">
        </div>
       <div> <a href="data:image/png;base64, <?php echo base64_encode(QrCode::format('png')->size(300)->generate('Your value here!')); ?> " download>Downloads</a></div>
    </div>

    </body>
    </html><?php /**PATH D:\umair\Laravel QRcode\resources\views/qrcode.blade.php ENDPATH**/ ?>