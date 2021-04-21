<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
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

    nav,footer,header,aside{display: block;}

    body {
        background-image: url(images/2.jpg);
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

    .bigred{
        font-size: 20px;
        color: red;
    }

    * {
        font-family: Arial, Helvetica, sans-serif;
    }
    .content {
        max-width:  600px;
        margin: 20px auto 0;
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

    .table {
        display:  flex;
        flex-direction: column;
    }

    .info td {
        font-weight: 700;
    }

    td {
        text-align: center;
        padding: 5px;
        border: 1px solid black;
    }

    .header {
        padding-bottom: 5px;
        border-bottom: 2px solid black;
    }

</style>
<title>Doc</title>
</head>
<body class="content">
    <header class="header">
        <ul class="nav">
            <li><a href="reg.php">Реєстрація</a></li>
            <li><a href="index.php">Записи</a></li>
        </ul>
    </header>

<div class="content">
    <?php include 'allget.php'; ?>
    <?php include 'bd.php'; ?>
    
    <?php
        $entries = getAllDb($db);
    ?>
    <table class="table">
        <tr class="info">
            <td>Номер</td>
            <td>Назва</td>
            <td>Тематика</td>
            <td>Рік випуску</td>
            <td>Видавництво</td>
            <td>Кількість сторінок</td>
            <td>Ціна</td>
            <td>Дія з записом</td>
        </tr>
        <?php foreach ($entries as $entry){?>
            <tr>
                <td><?php echo $entry ['Number'];?></td>
                <td><?php echo $entry ['name'];?></td>
                <td><?php echo $entry ['Subject'];?></td>
                <td><?php echo $entry ['Year_of_issue'];?></td>
                <td><?php echo $entry ['Publisher'];?></td>
                <td><?php echo $entry ['Number_of_pages'];?></td>
                <td><?php echo $entry ['Price'];?></td>
                <td><a class = "button" href = "del.php?Number=<?php echo $entry ['Number'];?>">Видалити</a></td>             
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>