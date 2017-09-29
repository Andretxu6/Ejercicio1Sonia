<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Form</title>

    </head>
    </body>
        <?php
            use App\form;
            $user = new form;
            $user->name = $_POST['nombre'];
            $user->surname = $_POST['apellido'];
            $user->age = $_POST['edad'];
            $user->save();


            $form_answ = App\form::all();

            echo "<table>";
            foreach ($form_answ as $form) {
                echo "<tr>";
                echo "<td>".$form->name."</td>";
                echo "<td>".$form->surname."</td>";
                echo "<td>".$form->age."</td>";
                echo "</tr>";
            }
            echo "</table>";

        ?>
    <body>
</html>