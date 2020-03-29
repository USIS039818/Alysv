var $ = el => document.querySelector(el),
    frmDocentes = $("#frmDocentes");
frmDocentes.addEventListener("submit",e=>{
    e.preventDefault();
    e.stopPropagation();
    
    let docentes = {
        accion    : 'nuevo',
        codigo    : $("#txtCodigoDocentes").value,
        nombre    : $("#txtNombreDocentes").value,
        direccion : $("#txtDireccionDocentes").value,
        telefono  : $("#txtTelefonoDocentes").value,
        NIT: $("#txtNit").value
    };
    fetch(`private/Modulos/Docentes/procesos2.php?proceso=recibirDatos&docentes=${JSON.stringify(docentes)}`).then( resp=>resp.json() ).then(resp=>{
        $("#respuestaDocentes").innerHTML = `
            <div class="alert alert-success" role="alert">
                ${resp.msg}
            </div>
        `;
    });
});