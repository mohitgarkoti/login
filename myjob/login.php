<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table{
            margin-top: 300px;
            border: 1px solid;
            background-color:#eee;

        }
        td{
            border: 0px;
            padding: 10px;
        }
        th{
            border-bottom: 1px solid;
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <form action="welcome.php" method="post">
        <table align="center">
            <tr>
                <th colspan="2"><h2 align="center">Login</h2></th>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="uname"></td>
            </tr>
<tr>
    <td>Email</td>
    <td><input type="email" name="pwd"></td>
</tr>
<tr>
    <td>mobile number</td>
    <td><input type="text" name="our"></td>
</tr>
<tr>
    <td align="right" colspan="2"><input type="submit" name="login" value="login">

    </td>
</tr>
        </table>
    </form>
</body>
</html>