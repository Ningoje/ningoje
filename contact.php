<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       * {
        background-color: burlywood;

       }
       h1 {
        text-align: center;
    }
        input{
            background-color: aliceblue;
            padding: 0rem;
            outline: auto;
            margin-left: 1rem;
            display: flex;
        }
        textarea{
            background-color: aliceblue;
            padding: 10rem;
            outline: auto;
            margin-left: 1rem;
            margin-right: 1rem;
            display: block;
            width: 60%;
            
        }
       
        .footer{
    bottom: 0%;
    right: 0%;
    font-family: monospace;
    position: fixed;
    color: aqua;
   
  }
  .box{
    position: absolute;
    right: 2%;
    text-align: right;
   
  }
  .box p{
 font-style: italic;

  }

    </style>
    
    <title>ContactUs</title>
</head>
<body> -->
<div class="header text-center">
    <h1>CONTACT US</h1>
</div>

<div class="card p-3 m-3">
    <form action="" method="post" class="row p-3 m-3">
        <div class="col-md-3">
            <input type="text" class="form-control" id="name" placeholder="Enter your name"><br>
        </div>
        <div class="col-md-3"> <input type="text" class="form-control" id="sub" placeholder="Enter subject"><br>
        </div>
        <div class="col">
            <textarea id="bodytxt" name="bodytxt" class="form-control " placeholder="Write something.."></textarea>
        </div>


        <br><br>
        <hr>

        <input class="btn btn-secondary" type="submit" value="Submit">

    </form>
</div>
<div class="box">
    <p>
        PO.BOX :2068,<br>
        CHUKA,THARAKA-NITHI <br>
        KENYA
    </p>

</div>