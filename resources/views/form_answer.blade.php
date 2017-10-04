@extends('master')

@section('sidebar')
    <div class="content">

        <table class="table table-striped table-hover well tablita">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $form_answ = App\form::all();
            foreach ($form_answ as $form)  {
                echo"<tr>";
                    echo "<td>".$form->id."</td>";
                    echo "<td>".$form->name."</td>";
                    echo "<td>".$form->surname."</td>";
                    echo "<td>".$form->age."</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>

    </div>
@endsection