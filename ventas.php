<?php
$conn = mysqli_connect('localhost', 'root', '', 'conection_pane_cafe');
if (!$conn) {
  die("Error de conexión: " . mysqli_connect_error());
}
?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Ventas · Panne e caffe</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <link rel="shortcut icon" href="panne.png">

    

<link href="bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #874a35;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #874a35;
        --bs-btn-hover-border-color: #874a35;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #874a35;
        --bs-btn-active-border-color: #874a35;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="panne.png" alt="panne e caffe" >
      <h2>Venta</h2>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          
          <span class="text-primary">Venta</span>
         
        </h4>



        <?php
        // Consulta SQL 
$sql = "SELECT *, valor_producto AS precio_unitario FROM inventario_productos";
$result = $conn->query($sql);

// Arreglo para almacenar los productos
$productos = array();


if ($result->num_rows > 0) {
    // Recorrer los resultados y guardar los datos en el array de productos
    while ($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
} else {
    echo "No se encontraron productos";
}

// Cerrar la conexión
$conn->close();
?>




        <ul class="list-group mb-3">
  <li class="list-group-item d-flex justify-content-between lh-sm">
    <form>
      <label for="producto">Producto:</label>
      <select id="producto">
        <option value="">Selecciona un producto</option>
        
        <?php
        
        
        foreach ($productos as $producto1) {
          $nombre = $producto1['nom_producto'];
          $precio = $producto1['precio_unitario'];
          
          // Imprimir la opción dentro del elemento select
          echo "<option value='$nombre'>$nombre</option>";
      }      
        ?>
       
        
      </select>
    </form>
  </li>
</ul>

              <label for="cantidad">Cantidad:</label>
              <input type="number" id="cantidad" min="1" value="1">
              <button type="button" onclick="agregarProducto()">Agregar</button>
            </form>
            
          
           
          </li>

          <script>
            
// Asignar los valores del array $productos a una variable JavaScript
var productos = <?php echo json_encode($productos); ?>;

function agregarProducto() {
    // Obtener los valores seleccionados del formulario
    var productoSeleccionado = document.getElementById("producto").value;
    var cantidadSeleccionada = document.getElementById("cantidad").value;
    var idProducto;
    for (var i = 0; i < productos.length; i++) {
        if (productos[i].nom_producto === productoSeleccionado) {
            idProducto = productos[i].id_producto;
            break;
        }
    }
    // Validar si se seleccionó un producto y la cantidad es mayor a 0
    if (productoSeleccionado && cantidadSeleccionada > 0) {
        // Crear una nueva fila para la tabla
        var fila = document.createElement("tr");

        // Crear las celdas de la fila con los valores seleccionados
        var celdaProducto = document.createElement("td");
        celdaProducto.textContent = productoSeleccionado;
        fila.appendChild(celdaProducto);

        var celdaCantidad = document.createElement("td");
        celdaCantidad.textContent = cantidadSeleccionada;
        fila.appendChild(celdaCantidad);

        // Obtener el precio unitario del producto seleccionado
        var precioUnitario;
        for (var i = 0; i < productos.length; i++) {
            if (productos[i].nom_producto === productoSeleccionado) {
                precioUnitario = productos[i].precio_unitario;
                break;
            }
        }

        var celdaPrecioUnitario = document.createElement("td");
        celdaPrecioUnitario.textContent = precioUnitario;
        fila.appendChild(celdaPrecioUnitario);

        var precioTotal = precioUnitario * cantidadSeleccionada;

        var celdaPrecioTotal = document.createElement("td");
        celdaPrecioTotal.textContent = precioTotal;
        fila.appendChild(celdaPrecioTotal);

        // Agregar la fila al cuerpo de la tabla
        var cuerpoTabla = document.getElementById("carritoBody");
        cuerpoTabla.appendChild(fila);

        // Actualizar el total de precios
        actualizarTotalPrecios();
    }
}


function actualizarTotalPrecios() {
    var total = 0;

    // Obtener todas las filas de la tabla
    var filas = document.querySelectorAll("#carritoBody tr");

    // Recorrer las filas y sumar los precios totales
    for (var i = 0; i < filas.length; i++) {
        var fila = filas[i];
        var precioTotal = parseFloat(fila.cells[3].textContent);
        total += precioTotal;
    }

    // Actualizar el valor del total en la tabla
    var totalPrecio = document.getElementById("totalPrecio");
    totalPrecio.textContent = total;
}


function confirmarCompra() {
    var totalPagado = parseFloat(document.getElementById("totalPrecio").textContent);
    var idProducto = null;
    var productoSeleccionado = document.getElementById("producto").value;

    // Obtener el ID del producto seleccionado
    for (var i = 0; i < productos.length; i++) {
        if (productos[i].nom_producto === productoSeleccionado) {
            idProducto = productos[i].id_producto;
            break;
        }
    }

    // Verificar que se haya seleccionado un producto y obtener la cantidad
    if (productoSeleccionado && idProducto) {
        var cantidadSeleccionada = parseInt(document.getElementById("cantidad").value);

        // Crear el objeto de datos para enviar en la solicitud POST
        var data = {
            total: totalPagado,
            id_producto: idProducto,
            cantidad: cantidadSeleccionada
        };

        // Realizar la solicitud POST al archivo PHP
        fetch("insertar_ventas.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        })
        .then(response => response.text())
        .then(result => {
            console.log(result); // Manejar la respuesta del servidor si es necesario
        })
        .catch(error => {
            console.error(error); // Manejar el error si ocurre
        });
    }
}

</script>
          <br>
          <br>
            <table id="tablaCarrito">
              <thead>
                <tr>
                  <th>Producto</th>
                  <th>Cantidad</th>
                  <th>Precio unitario</th>
                  <th>Precio total</th>
                </tr>
              </thead>
              <tbody id="carritoBody">

              </tbody>
            
              <tfoot>
                <tr>
                  <td colspan="3" style="text-align:right">Total:</td>
                  <td id="totalPrecio">0</td>
                </tr>
              </tfoot>
            
            </table>
            

          
          

        
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Datos Venta</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre Cliente</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                El primer nombre es requerido.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellido Cliente</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                El apellido es requerido.
              </div>
            </div>

            <div class="col-12">
              <label for="Vendedor" class="form-label">ID Vendedor</label>
              <div class="input-group has-validation">
                <span class="input-group-text">#</span>
                <input type="number" class="form-control" id="Vendedor" placeholder="Vendedor" required>
              <div class="invalid-feedback">
                  El ID Vendedor es requerido.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email Cliente<span class="text-body-secondary">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Por favor introduzca un email valido.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Dirección Cliente</label>
              <input type="text" class="form-control" id="address" placeholder="Cra 1 # 2 - 3" required>
              <div class="invalid-feedback">
                Por favor introduzca una dirección valida.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Dirección Cliente Especificacion<span class="text-body-secondary">(Opcional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartamento o piso">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Tipo de entrega</label>
              <select class="form-select" id="country" required>
                  <option value="">Seleccione una opción...</option>
                <option>Domiclio</option>
                <option>Local</option>
              </select>
              <div class="invalid-feedback">
                Seleccione un tipo de entrega valido.
              </div>
            </div>

            <div class="col-md-4">
              <label for="country" class="form-label">Medio de pago</label>
              <select class="form-select" id="country" onchange= "mostrarMenuPago()" required>
                <option value="">Seleccione una opción...</option>
                <option>Efectivo</option>
                <option>Nequi o daviplata</option>
              </select>
              
             

              <div class="invalid-feedback">
                Por favor elija un medio de pago valido.
              </div>
            </div>

          </div>
            </div>
          </div>
        
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" onclick="confirmarCompra()" type="button">Finalizar Venta</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; 2023 Panne e caffe</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="checkout.js"></script>
  </body>
</html>