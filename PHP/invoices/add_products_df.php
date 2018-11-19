<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Titulo</title>

        <!-- TABLE SCROLL STYLE!-->
    <style>
        .table-wrapper-scroll-y {
          display: block;
          max-height: 300px;
          overflow-y: auto;
            overflow-x:hidden; 
          -ms-overflow-style: -ms-autohiding-scrollbar;
        }
    </style>
    <!-- TABLE SCROLL STYLE END'S!--> 
    </head>
    
    <body>
    <!-- BUSCADOR DE PRODUCTOS!-->
    <div class="pb-2 pt-2 pl-2 ">
    <form class="form-inline my-2 my-lg-0 float-right">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    </div>
    
  <div class="table-wrapper-scroll-y">

  <table class="table table-borderless table-hover">
    <thead>
      <tr class="border-top">
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Unidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Agregar</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        require "../../conection.php";
        $sql="SELECT p.codigo_producto, p.nombre,i.cantidad,p.id_unidad ,precio from productos p join inventario i on p.codigo_producto=i.codigo_producto;";
        $result=mysqli_query($con,$sql);
        $no=1;
        while($ver=mysqli_fetch_row($result)){ ?>
            <tr class="border-top">
                <th scope="row"><?php echo $ver[0];?></th>
                <td><?php echo $ver[1];?></td>
                <td><?php echo $ver[2];?></td>
                <td><?php echo $ver[3];?></td>
                <td><?php echo $ver[4];?></td>
                <td class="row">
                    <form class="form" method="post">
                        <div class="row">
                            <input type="number" class="form-control" placeholder="Agregar" style="width:70px;" max="<?php echo $ver[2];?>" value="1" min="1"><button class="btn btn-success btn-sm" type="button"><img src="./assets/img/baseline_add_white_18dpmin.png" "width:1px; height:1px;"></button>
                        </div>
                    </form>
                </td>
            </tr>
            <?php }?>
    </tbody>
</table>

</div>
</body>

</html>