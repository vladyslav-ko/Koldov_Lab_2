<html>
    <head>
        <style>
            
            /*Обнуление*/
            *{
                padding: 0;
                margin: 0;
                border: 0;
            }
            *,*:before,*:after{
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            :focus,:active{outline: none;}
            a:focus,a:active{outline: none;}

            nav,footer,header,aside{display: block;
            }

            html,body{
                height: 100%;
                width: 100%;
                font-size: 100%;
                line-height: 1;
                font-size: 14px;
                -ms-text-size-adjust: 100%;
                -moz-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }
            input,button,textarea{font-family:inherit;}

            input::-ms-clear{display: none;}
            button{cursor: pointer;}
            button::-moz-focus-inner {padding:0;border:0;}
            a, a:visited{text-decoration: none;}
            a:hover{text-decoration: none;}
            ul li{list-style: none;}
            img{vertical-align: top;}

            /*--------------------*/
            body{
                background-image: url(images/1.jpg);
            }
            .bigred{
                font-size: 20px;
                color: red;
            }

            * {
                font-family: Arial, Helvetica, sans-serif;
            }
            .content {
                max-width:  300px;
                margin: 20px auto 0;
            }
            .form {
                display:  flex;
                flex-direction: column; 
                gap: 15px;
            }
            .reg{
                background-image: url(images/2.jpg);
            }
            .input {
                display: flex;
                flex-direction: column;
                gap: 5px;
            }

            .input label {
                font-size: 20px;
            }

            .input input {
                border-radius: 10px;
                border: 2px solid black;
                font-size: 16px;
                padding: 10px;
                background: none;
            }

            .submit-button {
                padding: 20px;
                font-size: 26px;
                border-radius: 10px;
                font-weight: 700;
                background: rgb(88, 88, 88);
                color: #e4e1e1;
                font-family: Snell Roundhand, cursive;
            }

            .nav {
                display:  flex;
                justify-content: space-between;
            }

            .nav li {
                flex: 1 1 50%;
                padding: 10px 0;
                text-align: center;
                font-weight: 700;
                list-style: none;
                text-transform: uppercase;
                font-size: 20px;
                border: 1px solid rgba(0, 0, 0, 0);
            }

            .nav li:hover {
                border: 1px solid black;
            }

            a {
                text-decoration: none;
                color: black;
            }

            .header {
                padding-bottom: 5px;
                border-bottom: 2px solid black;
                margin: 0 0 10px 0;
            }   
        </style>
    <title>Записи
        
    </title>
    </head>
    <body class="content">
        <header class="header">
            <ul class="nav">
                <li><a href="reg.php">Реєстрація</a></li>
                <li><a href="index.php">Записи</a></li>
            </ul>
        </header>
        <form action="save_data.php" method="post" class="form">
            
        
            <div class="input">
                <label for="name">Назва журналу:</label>
                <input name="name" type="text" size="15" maxlength="15" id="name">
            </div>

            <div class="input">
                <label for="numbers">Кількість сторінок:</label>
                <input name="Number_of_pages" type="text" size="15" maxlength="15" id="numbers">
            </div>

            <div class="input">
                <label for="price">Ціна:</label>
                <input name="Price" type="text" size="15" maxlength="15" id="price">
            </div>

            <div class="input">
                <label for="publisher">Видавництво:</label>
                <input name="Publisher" type="text" size="15" maxlength="15" id="publisher">
            </div>

            <div class="input">
                <label for="theme">Тематика:</label>
                <input name="Subject" type="text" size="15" maxlength="15" id="theme">
            </div>

            <div class="input">
                <label for="year">Рік випуску:</label>
                <input name="Year_of_issue" type="text" size="15" maxlength="15" id="year">
            </div> 

            <input type="submit" name="submit" value="Надіслати" class="submit-button">

        </form>
    </body>
</html>