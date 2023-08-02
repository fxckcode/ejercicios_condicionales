<!-- Se tienen un cultivo de café, de los cuales con el uso de la tecnología se recolectan los
siguientes datos para análisis de suelo:
PH (Acidez del suelo) rango adecuado entre 5 y 5.5.
Materia orgánica mayor a 8
Fosforo (P) mayor a 30
Calcio (Ca) mayor a 3
Magnesio (Mg) mayor a 0.9
Potasio (K) mayor a 0.4
Aluminio (Al) menor a 1
Acorde a los datos recolectados identificar si el suelo es apto para la siembra café -->

<form action="#" method="POST">
    <input type="number" step="any" name="ph" placeholder="Acidez del suelo" required>
    <input type="number" step="any" name="materia_organica" placeholder="Materia organica" required>
    <input type="number" step="any" name="fosforo" placeholder="Fosforo" required>
    <input type="number" step="any" name="calcio" placeholder="Calcio" required>
    <input type="number" step="any" name="magnesio" placeholder="Magnesio" required>
    <input type="number" step="any" name="potasio" placeholder="Potasio" required>
    <input type="number" step="any" name="aluminio" placeholder="Aluminio" required>
    <button type="submit">Calcular</button>
</form>



<?php

if (isset($_POST['ph']) && isset($_POST['materia_organica']) && isset($_POST['fosforo']) && isset($_POST['calcio']) && isset($_POST['magnesio']) && isset($_POST['potasio']) && isset($_POST['aluminio'])) {
    $ph = $_POST['ph'];
    $materia_organica = $_POST['materia_organica'];
    $fosforo = $_POST['fosforo'];
    $calcio = $_POST['calcio'];
    $magnesio = $_POST['magnesio'];
    $potasio = $_POST['potasio'];
    $aluminio = $_POST['aluminio'];
    
    if (is_numeric($ph) && is_numeric($materia_organica) && is_numeric($fosforo) && is_numeric($calcio) && is_numeric($magnesio) && is_numeric($potasio) && is_numeric($aluminio)) {
        $ph = floatval($ph);
        $materia_organica = floatval($materia_organica);
        $fosforo = floatval($fosforo);
        $calcio = floatval($calcio);
        $magnesio = floatval($magnesio);
        $potasio = floatval($potasio);
        $aluminio = floatval($aluminio);
        if ($ph >= 5 && $ph <= 5.5 && $materia_organica > 8 && $fosforo > 30 && $calcio > 3 && $magnesio > 0.9 && $potasio > 0.4 && $aluminio < 1) {
            Echo "El suelo es apto";
        } else {
            Echo "El suelo no es apto";
        }
    } else {
        echo "Error en los datos";
    }

}



?>