## Introduction

You'll learn how to create a QR code. How to set up the qrcode package. Laravel qrcode configuration instructions. How to create a qr code in a function. displaying QR codes in blade templates. How to get it and decode the QR code. 

Before you start this project, you need to make sure that you installed imagick already.

## Step 1:  Create Laravel Project

    composer create-project --prefer-dist laravel/laravel qr_code_generator
  
  or
  
    laravel new qr_code_generator
  
## Step 2 : Install Package and Configure

    composer require simplesoftwareio/simple-qrcode
  
  Open config/app.php file and put the code like below:
    
    'providers' => [
      SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class,
    ],

    'aliases' => [
      ....
      'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class,
    ],
    
## Step 3 : Basic Usage
   - Syntax : The basic syntax is:
   
          QrCode::size(100)->generate('Your value here!');
    
   - Set Size : We can set the size of the QR code image.
    
          QrCode::size(300)->generate('Your value here!');
    
   - Color : We can also set background color.
   
          QrCode::size(250)->backgroundColor(255,255,204)->generate('Your value here!');
      
## Step 4 : create controller: Qrcontroller

    php artisan make:Controller Qrcontroller
    
## Step 5 : Paste This Code In Controller

    <?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class Qrcontroller extends Controller
    {
        function generate()
        {
            return view('qrcode');
        }
    }


## Step 6: create route
 
    Route::get('generate',[Qrcontroller::class,'generate']);
    
## Step 7 : Create Blade File

    php artisan make:view qrcode
    
## Step 8 : Paste This Code In Blade File
    
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
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate('Your value here!')) !!} ">
            </div>
            <div> <a href="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate('Your value here!')) !!} " download>Downloads</a></div>
        </div>

    </body>

    </html>    
## Examples

![image](https://user-images.githubusercontent.com/12113932/219296932-cf4dad66-68d1-4d20-a2b6-b127c6c3a9f9.png)
