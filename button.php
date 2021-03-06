<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button</title>

    <style>

          *{
              margin: 0;
              padding: 0;
          }

          body{
              display: flex;
              justify-content: center;
              align-items: center;
              min-height: 100vh;
              background-color: #1f242d;
          }

          a{
              position: relative;
              display: inline-block;
              padding: 20px 30px;
              text-decoration: none;
              text-transform: uppercase;
              color: rgba(255, 255, 255, 0.4);
              background: #262c37;
              letter-spacing: 2px;
              font-size: 16px;
              transition: 0.5s;
          }

          a:hover{
            color: rgba(255, 255, 255, 1);
          }

          a span{
              display: block;
              position: absolute;
              background: #2894ff;
          }

          a span:nth-child(1){
              left: 0;
              bottom: 0;
              width: 1px;
              height: 100%;
              transform: scaleY(0);
              transform-origin: top;
              transition: transform 0.5s;
          }

          a:hover span:nth-child(1){
            transform: scaleY(1);
              transform-origin: bottom;
              transition: transform 0.5s;
          }

          a span:nth-child(2){
              left: 0;
              bottom: 0;
              width: 100%;
              height: 1px;
              transform: scalex(0);
              transform-origin: right;
               transition: transform 0.5s;
          }

          a:hover span:nth-child(2){
            transform: scaleY(1);
              transform-origin: left;
              transition: transform 0.5s;
          }

          a span:nth-child(3){
            right: 0;
              bottom: 0;
              width: 1px;
              height: 100%;
              transform: scaley(0);
              transform-origin: top;
               transition: transform 0.5s;
          }

          a:hover span:nth-child(3){
            transform: scaleY(1);
              transform-origin: bottom;
              transition: transform 0.5s;
          } 

           a span:nth-child(4){
              left: 0;
              top: 0;
              width: 100%;
              height: 1px;
              transform: scalex(0);
              transform-origin: right;
               transition: transform 0.5s;
               transition-delay: 0.5s;
          }

          a:hover span:nth-child(4){
            transform: scaleY(1);
              transform-origin: left;
              transition: transform 0.5s;
              transition-delay: 0.5s;
              
          }
    </style>
</head>
<body>
   <a href="#">
       <span></span>
       <span></span>
       <span></span>
       <span></span>
       Button
   </a> 
</body>
</html>