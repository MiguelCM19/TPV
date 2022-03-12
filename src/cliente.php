<?php
 include_once ('header.php');
 include_once ('conexion.php');
 include_once ('footer.php');


 $query = "SELECT 
				* 
			FROM 
      clientes";


	$resultado = mysqli_query($conexion, $query ) or die
	("Algo ha ido mal en la consulta a la base de datos ". mysqli_error($conexion));



echo ("<div class='grid'>");  //    
    echo ("<div class='order-last pl-2 xl:pl-48 lg:pl-32 md:pl-20 sm:pl-0 pt-20 w-10/12 overflow-hidden grid gap-2 grid-cols-2 xl:grid-cols-6 lg:grid-cols-4 md:grid-cols-3  sm:grid-cols-2 grid-rows-1'>");

        while($rows = mysqli_fetch_array($resultado)){	
        
	    echo "<div class='justify-self-end mb-4 hover:text-white'>
	    		<a href='cliente.php?id=".$rows['id_cliente']."'>
	    	</a>
                <p class='my-2 hover:text-white text-2xl text-center'>".$rows['nombre']."</p>
                <p class='my-2 hover:text-white text-2xl text-center'>".$rows['apellido']."</p>
                <p class='my-2 hover:text-white text-2xl text-center'>".$rows['telefono']."</p>
                <p class='my-2 hover:text-white text-2xl text-center'>".$rows['direccion']."</p>
            </div>";	
	    }

	echo("</div>");	
	

    
        
?>


