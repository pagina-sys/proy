<?php include('../Plantillas/Cabecera.php');?>
<div class="col-3">
<form action=""method="post">
   <div class="card">
    <div class="card-header">Alimentacio Dietetica </div>
    <div class="card-body">
      
        <div class="mb-1">
    <label for="Id" class="form-label">Id</label>
    <input
        type="text"
        class="form-control"
        name="Id"
        id="Id"
        aria-describedby="helpId"
        placeholder="Id"/>
   
  </div>

  <div class="mb-1">
    <label for="Desayuno" class="form-label">Desyuno</label>
    <input
        type="text"
        class="form-control"
        name="Desayuno"
        id="Desayuno"
        aria-describedby="helpId"
        placeholder="Desayuno"/>
   
  </div>
  <div class="mb-1">
    <label for="Mierda_Refrigerio" class="form-label">Merienda_Refrigerio</label>
    <input
        type="text"
        class="form-control"
        name="Merienda"
        id="Merienda"
        aria-describedby="helpId"
        placeholder="Merienda"/>
   
  </div>
  <div class="mb-1">
    <label for="" class="form-label">Almuerzo</label>
    <input
        type="text"
        class="form-control"
        name="Almuerzo"
        id="Almuerzo"
        aria-describedby="helpId"
        placeholder="Almuerzo"/>
   
  </div>
  <div class="mb-1">
    <label for="" class="form-label">Merienda_Refrigerio</label>
    <input
        type="text"
        class="form-control"
        name="Merienda"
        id="Merienda"
        aria-describedby="helpId"
        placeholder="Merienda"/>
   
  </div>

    </div>
    
   </div>
   
  

</div>
</div>

<div class="btn-group" role="group" aria-label="Button group name">
  <button
    type="button"
    class="btn btn-primary"
  >
    adicion
  </button>
  <button
    type="button"
    class="btn btn-primary"
  >
    eliminacion
  </button>
  <button
    type="button"
    class="btn btn-primary"
  >
    actualizacion
  </button>
</div>


<br/>

<div class="col-8">
<div
  class="table-responsive"
>
  <table
    class="table table-primary"
  >
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Desayuno</th>
        <th scope="col">Merienda_refri</th>
        <th scope="col">Almuerzo</th>
        <th scope="col">Merienda_refri</th>
      </tr>
    </thead>
    <tbody>
      <tr class="">
        <td scope="row">1</td>
        <td>chocolate </td>
        <td>Jugo_fruta</td>
        <td>Sopa_fideo</td>
        <td>Leche</td>

      </tr>
     
    </tbody>
  </table>
</div>





</form>
<?php include('../Plantillas/pie.php');?>
