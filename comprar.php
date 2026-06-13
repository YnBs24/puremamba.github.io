<?php

require_once("VIEW/TEMPLATES/head.php");
?>

<div class="context-dark">
  <!-- Modern Breadcrumbs-->
  <section>
    <div class="parallax-container breadcrumb-modern bg-gray-darkest" data-parallax-img="images/background-04-1920x750.jpg">
      <div class="parallax-content">
        <div class="container section-top-98 section-bottom-34 section-lg-bottom-66 section-lg-98 section-xl-top-110 section-xl-bottom-41">
          <h2 class="d-none d-lg-block offset-top-30"><span class="big">Catálogo Puré Mamba</span></h2>

        </div>
      </div>
    </div>
  </section>
</div>
</header>

<section class="section-60 section-md-90">
    <div class="container">

        <p class="text-center text-muted">Selecciona tu estilo y entrena con actitud</p>

        <div class="row offset-top-40">

            <!-- PRODUCTO 1 -->
            <div class="col-md-4 col-sm-6 offset-top-30">

                <div>

                    <a href="#">
                        <img src="RESOURCES/ejemplo.jpg" alt="Playera Serpiente Negra" width="480" height="480">
                    </a>

                    <div class="offset-top-15">

                        <h4>Playera Estampado Serpiente Negra</h4>

                        <p class="text-muted">Tallas disponibles</p>
                        <select>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>

                        <p class="text-muted">Colores disponibles</p>

                        <label>
                            <input type="radio" name="color1" value="negro">
                            <span style="display:inline-block;width:18px;height:18px;background:#000;border:1px solid #ccc;margin-right:8px;"></span>
                        </label>

                        <label>
                            <input type="radio" name="color1" value="blanco">
                            <span style="display:inline-block;width:18px;height:18px;background:#fff;border:1px solid #ccc;margin-right:8px;"></span>
                        </label>

                        <label>
                            <input type="radio" name="color1" value="rojo">
                            <span style="display:inline-block;width:18px;height:18px;background:#e60000;border:1px solid #ccc;margin-right:8px;"></span>
                        </label>

                        <p class="text-danger font-weight-bold">$399 MXN</p>

                        <p>
                            Cantidad:
                            <input type="number" min="1" value="1" style="width:70px;">
                        </p>

                        <a class="btn btn-danger" href="#">Agregar al carrito</a>

                    </div>

                </div>

            </div>

            <!-- PRODUCTO 2 -->
            <div class="col-md-4 col-sm-6 offset-top-30">

                <div>

                    <a href="#">
                        <img src="RESOURCES/ejemplo2.jpg" alt="Sudadera Pure Mamba" width="480" height="480">
                    </a>

                    <div class="offset-top-15">

                        <h4>Sudadera Oversize</h4>

                        <p class="text-muted">Tallas disponibles</p>
                        <select>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>

                        <p class="text-muted">Colores disponibles</p>

                        <label>
                            <input type="radio" name="color2" value="negro">
                            <span style="display:inline-block;width:18px;height:18px;background:#000;border:1px solid #ccc;margin-right:8px;"></span>
                        </label>

                        <label>
                            <input type="radio" name="color2" value="gris">
                            <span style="display:inline-block;width:18px;height:18px;background:#666;border:1px solid #ccc;margin-right:8px;"></span>
                        </label>

                        <p class="text-danger font-weight-bold">$599 MXN</p>

                        <p>
                            Cantidad:
                            <input type="number" min="1" value="1" style="width:70px;">
                        </p>

                        <a class="btn btn-danger" href="#">Agregar al carrito</a>

                    </div>

                </div>

            </div>

            <!-- PRODUCTO 3 -->
            <div class="col-md-4 col-sm-6 offset-top-30">

                <div>

                    <a href="#">
                        <img src="RESOURCES/ejemplo3.jpg" alt="Pants Gym Pure Mamba" width="480" height="480">
                    </a>

                    <div class="offset-top-15">

                        <h4>Pants Deportivo Fit dama</h4>

                        <p class="text-muted">Tallas disponibles</p>
                        <select>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>

                        <p class="text-muted">Colores disponibles</p>

                        <label>
                            <input type="radio" name="color3" value="negro">
                            <span style="display:inline-block;width:18px;height:18px;background:#000;border:1px solid #ccc;margin-right:8px;"></span>
                        </label>

                        <label>
                            <input type="radio" name="color3" value="azul">
                            <span style="display:inline-block;width:18px;height:18px;background:#0a5;border:1px solid #253a96;margin-right:8px;"></span>
                        </label>

                        <p class="text-danger font-weight-bold">$549 MXN</p>

                        <p>
                            Cantidad:
                            <input type="number" min="1" value="1" style="width:70px;">
                        </p>

                        <a class="btn btn-danger" href="#">Agregar al carrito</a>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<section class="section-60 section-md-90 bg-gray-lighter">
  <div class="container">
    <h2 class="text-center">Carrito de Compras</h2>
    <p class="text-center text-muted">Revisa tus productos antes de finalizar tu pedido.</p>

    ```
    <div class="table-responsive offset-top-40">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Producto</th>
            <th>Talla</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Playera Oversize Pure Mamba</td>
            <td>M</td>
            <td>1</td>
            <td>$399 MXN</td>
            <td>$399 MXN</td>
          </tr>
          <tr>
            <td>Short Deportivo Pure Mamba</td>
            <td>L</td>
            <td>1</td>
            <td>$349 MXN</td>
            <td>$349 MXN</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="row offset-top-30">
      <div class="col-md-6">
        <a href="productos.html" class="btn btn-default">
          Seguir Comprando
        </a>
      </div>

      <div class="col-md-6 text-md-right">
        <h4>Total: <span class="text-danger">$748 MXN</span></h4>
        <a href="#" class="btn btn-danger offset-top-10">
          Finalizar Compra
        </a>
      </div>
    </div>
  </div>
  ```

</section>


<?php require_once('VIEW/TEMPLATES/footer.php') ?>