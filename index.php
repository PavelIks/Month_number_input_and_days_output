<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if($_POST['Month'] == 1)
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: deepskyblue">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это январь с 31 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else if ($_POST['Month'] == 2)
{
    echo
    '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: deepskyblue">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это февраль с 29 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else if ($_POST['Month'] == 3)
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: greenyellow">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это март с 31 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else if ($_POST['Month'] == 4)
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: greenyellow">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это апрель с 30 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else if ($_POST['Month'] == 5)
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: greenyellow">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это май с 31 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else if ($_POST['Month'] == 6)
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: red">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это июнь с 30 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else if ($_POST['Month'] == 7)
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: red">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это июль с 31 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else if ($_POST['Month'] == 8)
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: red">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это август с 31 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else if ($_POST['Month'] == 9)
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: orange">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это сентябрь с 30 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else if ($_POST['Month'] == 10)
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: orange">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это октябрь с 31 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else if ($_POST['Month'] == 11)
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: orange">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это ноябрь с 30 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else if ($_POST['Month'] == 12)
{
    echo
        '
                <table style="background-color: black; margin-top: 20%; margin-left: 50%; color: deepskyblue">
                    <tr>
                        <td>
                            <h1>
                                <label>Вы ввели '.($_POST['Month']).' месяц. Это декабрь с 31 днями.</label>
                            </h1>
                        </td>
                    </tr>
                </table>
         ';
}
else
{
    echo
        '
            <form method="post" action="index.php">
                <p>Введите номер месяца:<input name="Month" type="number" max="12" min="1"></p>
                <input type="submit">
            </form>
        ';
}
?>
</body>

</html>