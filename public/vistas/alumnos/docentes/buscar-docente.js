export function modulo(){
    var $ = el => document.querySelector(el),
        frmBuscarDocente = $("#txtBuscarDocente");
    frmBuscarDocente.addEventListener('keyup', e=>{
        traerDatos(frmBuscarDocente.value);
    });
    let modificarDocente = (docente)=>{
        $("#frm-docentes").dataset.accion = 'modificar';
        $("#frm-docentes").dataset.idalumno = docente.idAlumno;
        $("#txtCodigoDocente").value = docente.codigo;
        $("#txtNombreDocente").value = docente.nombre;
        $("#txtDireccionDocete").value = docente.direccion;
        $("#txtTelefonoDocente").value = docente.telefono;
        $("#txtNIT".value= docente.NIT)
    };
    let eliminarDocente = (idDocente)=>{
        fetch(`private/Modulos/alumnos/docentes/procesos2.php?proceso=eliminarDocente&docente=${idDocente}`).then(resp=>resp.json()).then(resp=>{
            traerDatos('');
        });
    };
    let traerDatos = (valor)=>{
        fetch(`private/Modulos/docentes/procesos.php?proceso=buscarDocente&docente=${valor}`).then(resp=>resp.json()).then(resp=>{
            let filas = '';
            resp.forEach(docente => {
                filas += `
                    <tr data-iddocnete='${alumno.idAlumno}' data-alumno='${JSON.stringify(docente)}'>
                        <td>${docentes.codigo}</td>
                        <td>${docentes.nombre}</td>
                        <td>${docentes.direccion}</td>
                        <td>${docentes.telefono}</td>
                        <td>${docentes.NIT}</td>
                        <td>
                            <input type="button" class="btn btn-outline-danger text-white" value="del">
                        </td>
                    </tr>
                `;
            });
            $("#tbl-buscar-docentes > tbody").innerHTML = filas;
            $("#tbl-buscar-docentes> tbody").addEventListener("click",e=>{
                if( e.srcElement.parentNode.dataset.docentes==null ){
                    eliminarDocente( e.srcElement.parentNode.parentNode.dataset.idDocente );
                } else {
                    modificarDocente( JSON.parse(e.srcElement.parentNode.dataset.docente) );
                }
            });
        });
    };
    traerDatos('');
}