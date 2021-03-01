 
  <div class="modal fade" id="modal_asociar_sostenedor_esta">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
     
        <div class="modal-header">
          <h4 class="modal-title">Asociar Establecimiento</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
      
        <div class="modal-body" style="height: 100px;">
         <form id="formulario_update_sostenedor">
         <div class="row">
          <div class="col-md-6">
              <label>Seleccione Establecimiento:</label>
              <select class="select2-establecimiento" style="width:300px; height: 60px;"></select>
          </div>
         </div>
        </div>              
        <div class="modal-footer">
        <button type="button" id="vincula_soste" onclick="asociarEstablecimientoSostenedor(this)" class="btn btn-primary" value="Asociar" disabled="disabled" />Asociar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>