
<html>
    <title>form validation</title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
               
                background-repeat: no-repeat;
            }
          img{
            opacity: 70%;
			height:100%;
			width:100%;
          }
             
            h2{
                background: white;
                height:40px;
                color:black;
                font-display: center;
                text-align: center;
            }
            .container{
                opacity: 92%;
        
                box-shadow:5px 5px 8px 6px rgba(0,0,0,0.75);
                border-radius:18px;
                border: 1px solid #cccccc;
                opacity: none;
               position:absolute;
                top:22%;
                left:36%;
                width:400px;
                height:457px;
                background-color : grey;
                
              

            }
            .submit1{
                background-color: white;
                color:black;
                font-style:bold;
                position: relative;
                box-shadow:2px 2px 4px 0px;
                height:26px;
                width:89px;
                left:142px;

            }
            .box{
                height:38px;
                width:70%;
                margin:5px;
                position:relative;
                border-radius:5px;
                border-width:2px;
                left:40px;
                background-image: linear-gradient(to right, #3080C7,#66CDAA);
               
                 
            }
            .a{
                position:relative;
                left:40px;
            }
            h4{
                text-align: 40px;
            }	
			ul {
				background-color:grey;
				position:relative;
  				list-style-type: none;
				top:-114%;
				right:545px;
  				margin: 0;
  				padding: 0;
				height: 71px;
                      width: 1518px;
				}
			li{
				display:inline;
				padding:3px 3px 3px 3px;
				margin:20px 20px 20px 20px;
                      background-color:white;
                      font-size:40px;
                      color:yellow;
position:relative;
left:909px;
text-decoration-line:none;
                      
				}
        </style>
        

    </head>
    <body>
        <img src="https://www.fabhotels.com/blog/wp-content/uploads/2019/07/29-types-of-Trains_600-1280x720.jpg")></img:>
        <div class="container">
            <form action="display.php"  method="post">
                <h2 ><b>Sign - up</b></h2>
                Name:<br><input type="text" name="name"  class="box"  ><br>
                Phone No.:<br><input type="text" name="phone"  class="box" ><br>
                Email:<br><input type="email"  name="mail" class="box" ><br><br>
                Address:<br><input type="text" name="add" class="box" ><br><br>
                <input type="submit" name="submit"  class ="submit1">
            </form>
<ul>
  			<li><a href="#home">Home</a></li>
  			<li><a href="#news">News</a></li>
  			<li><a href="#contact">Contact</a></li>
  			<li><a href="#about">About</a></li>
			</ul>
</div>

    </body>
</html>