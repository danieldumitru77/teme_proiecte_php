<?php


//conexiunea la baza de date
$conn=new mysqli("localhost","root","","baza_date_complexa");

if($conn->connect_error){
    die("Conexiune esuata :".$conn->connect_error);
}


//daca selectam butonul selecteaza datele facem o interogare SELECT pentru a lua datele din baza
//si afisam cu un while selectand fiecare rand si afisandul intrun tabel
if(isset($_POST['selectare'])){

    $result = $conn->query("SELECT *FROM cantareti");
    echo "<h2>Cantaretii din baza de date</h2>";
    
    echo "<table border='1'><tr><th>Id</th><th>Nume</th><th>Prenume</th><th>Piesa</th></tr>";
    
    //while pentru a selecta fiecare rand din baza de date
    while ($rand = $result->fetch_assoc()){
        echo "<tr><td>" . $rand['id'] ."</td><td>" . $rand['nume'] . "</td><td>". $rand['prenume'] . "</td><td>"  . $rand['piesa'] ."</td></tr> ";
    }
    echo "</table>";
}


//daca selectam inserare va dauga un rand nou cu datele din formular
if(isset($_POST['inserare'])){
    //luam datele din formular
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $piesa = $_POST['piesa'];
    
    //facem un query INSERT pentru a insera un rand nou
    $sql = "INSERT INTO cantareti (nume,prenume,piesa) VALUES('$nume','$prenume','$piesa')";
    if ($conn->query($sql) === TRUE) {
        echo "Un nou cantaret inserat cu succes!";
    } else {
        echo "Eroare la inserarea datelor: " . $conn->error;
    }
    //mai facem un query pentru a afisa datele si dupa insert
    $result = $conn->query("SELECT *FROM cantareti");
    echo "<h2>Cantaretii din baza de date</h2>";
    
    echo "<table border='1'><tr><th>Id</th><th>Nume</th><th>Prenume</th><th>Piesa</th></tr>";
    
    //while pentru a selecta fiecare rand din baza de date
    while ($rand = $result->fetch_assoc()){
        echo "<tr><td>" . $rand['id'] ."</td><td>" . $rand['nume'] . "</td><td>". $rand['prenume'] . "</td><td>"  . $rand['piesa'] ."</td></tr> ";
    }
    echo "</table>";

}

//pentru DELETE avem nevoie de un id pentru a stii care rand sa il stergem
if(isset($_POST['stergere'])){

    //luam id-ul din formular
    $idStergere = $_POST['idStergere'];
    
    $sql = "DELETE FROM  cantareti WHERE id = $idStergere";
    if ($conn->query($sql) === TRUE) {
        echo "DELETE cu succes!";
    } else {
        echo "Eroare la stergerea datelor: " . $conn->error;
    }

}


//inchidem conectiunea la baza de date
$conn->close();

?>
<html >

    <head>
    
        <style>

              body {
             
                    font-family :Arial ;
                    background-color: #f4f4f4;
                    padding:20px;
              }  

              form{
               
                 background-color:white;
                    padding:20px;
                 border-radius:8px;
                 box-shadow:0 0 10px rgba(0,0,0,0.1);
                 max-width:500px; 
                margin:auto;
                
              } 
              
              label{

                display: block;
                 margin-bottom:5px;
                font-weight:bold;

              }
              input[type="text"],input[type="password"]{

                    width:100%;
                    padding:5px;
                    margin-bottom:10px;          
                    border:1px solid green;
                    border-radius:4px;

              }
            
              input[type="submit"]{

                    background-color:#008CBA;
                    color:white;                
                    padding:10px 20px;
                    border:none;
                     border-radius:4px;
                    cursor:pointer;

              }
              
              input[type="submit"]:hover{

                background-color:#005f5f;;
                
              }

        </style>
         
    </head>
   


    <body>
        <h2>Form pentru operatiuni CRUD</h2>

        <form action="" method="post">
            <!-- Butonul pentru afisare date -->   
            <input type="submit" name="selectare" value="Selecteaza datele"> <br><br>    


         </form>

        <form action="" method="post">
 
             <!-- Inserare date --> 
            <label for="nume">Nume</label>
            <input type="text" name="nume" id="nume" required> <br>

            <label for="prenume">Prenume</label>
            <input type="text" name ="prenume" id="prenume" required> <br>

            <label for="piesa">Piesa</label> 
            <input type="text" name="piesa" id="piesa" required> <br>
            
            <input type="submit" name="inserare" value="Inserare"><br><br>

          


         </form>
   
         
         <form action="" method="post">
          

            <!-- Id si buton de delete -->
            <label for="idStergere"> Id pentru stergere</label>
            <input type="number" name="idStergere" required>

            <input type="submit" name="stergere" value="Stergere">


         </form>
  

    </body>
 
</html>


