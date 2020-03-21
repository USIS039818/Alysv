var $ = el => document.querySelector(el);
document.addEventListener("DOMContentLoaded",event=>{
    let mostrarVista = $("[class*='mostrar-alumnos']"),
    mostrardocente=$("[class*='mostrar-docentes']");
    mostrarVista.addEventListener('click',e=>{
        e.stopPropagation();

        let modulo = e.srcElement.dataset.modulo;
        fetch('public/vistas/alumnos/alumnos.html').then( resp=>resp.text() ).then(resp=>{
           
            $(`#vista-${modulo}`).innerHTML = resp;
            
            let btnCerrar = $(".close");
            btnCerrar.addEventListener("click",event=>{
                $(`#vista-${modulo}`).innerHTML = "";
            });

            let cuerpo = $("body"),
                script = document.createElement("script");
            script.src = `/public/vistas/alumnos/alumnos/${modulo}/${modulo}.js`;
            cuerpo.appendChild(script);
        });
    });
});
mostrardocente.addEventListener('click',e=>{
    e.stopPropagation();
    let modulo = e.srcElement.dataset.modulo;
    fetch('public/vistas/docentes/docentes.html').then( resp=>resp.text() ).then(resp=>{
       
        $(`#vista-${modulo}`).innerHTML = resp;
        
        let btnCerrar = $(".close");
        btnCerrar.addEventListener("click",event=>{
            $(`#vista-${modulo}`).innerHTML = "";
        });

        let cuerpo = $("body"),
            script = document.createElement("script");
        script.src = `/public/vistas/docentes/docentes/${modulo}/${modulo}.js`;
        cuerpo.appendChild(script);
});
});

