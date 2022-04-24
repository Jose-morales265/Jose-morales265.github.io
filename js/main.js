$(document).ready(function() {
    
    //Indicación de que jQuery funciona
    console.log('jquery esta trabajando!')
    //variables universales
    
    tbadmin()
    tbisw()
    tbiau()
    tbiee()
    tbtf()
    tbitm()
    conteoisw()
    conteoiee()
    conteoiau()
    conteoitm()
    conteotf()
    conteogral()
    $('#result-search').hide()
    $('#result-search2').hide()
    $('#result-search3').hide()
    $('#result-search4').hide()
    $('#result-search5').hide()
    $('#form-edit').trigger('reset')
    $('#form-edit-iau').trigger('reset')
    $('#form-edit-iee').trigger('reset')
    $('#form-edit-tf').trigger('reset')
    $('#form-edit-tm').trigger('reset')

    //Función para el login
    $('#form-login').submit(function(e){
        e.preventDefault()
        var formulario = $('#form-login').serialize()
        $.ajax({
            type: "POST",
            url: 'bd/login.php',
            data: formulario,

            success: function(response) {
                if(response != 'error'){
                    console.log("success")
                    $('#alerta').addClass('d-none')
                    document.location.href = 'admin.php'
                }else{
                    console.log("error")
                    $('#alerta').removeClass('d-none')
                }   
            }
        })
    })

    //Función para registro

    $('#form-reg').submit(function(e){
        e.preventDefault()
        var formregistro = $('#form-reg').serialize();
        $.ajax({
            type: "POST",
            url: 'bd/insertar.php',
            data: formregistro,

            success: function(response){
                if (response == 'completar') {
                    console.log("error en los datos")
                    $('#alerta').removeClass('d-none')
                    $('#alert-sesion').addClass('d-none')
                }else if(response == 'success'){
                    console.log("success")
                    $('#form-reg').trigger('reset')
                    $('#alerta').addClass('d-none')
                    $('#alerta2').addClass('d-none')
                    $('#alert-sesion').removeClass('d-none')
                }else if(response == 'error'){
                    console.log("error al eviar")
                    $('#alerta2').addClass('d-none')
                    $('#alert-sesion').addClass('d-none')
                }else{
                    console.log("error en los datos")
                    $('#alerta').removeClass('d-none')
                    $('#alert-sesion').addClass('d-none')
                }
            }
        })
    })

    //Función para llamar datos a la tabla en la pagina principal del admin
        function tbadmin(){
            $.ajax({
                url: 'bd/tbadmin.php',
                type: 'GET',
                success: function(response){
                    let alumnos = JSON.parse(response)
                    let template = ''
                    alumnos.forEach(alumno => {
                        template +=`
                        <tr>
                            <td>${alumno.id_alumno}</td>
                            <td>${alumno.nombre1}</td>
                            <td>${alumno.nombre2}</td>
                            <td>${alumno.apaterno}</td>
                            <td>${alumno.amaterno}</td>
                            <td>${alumno.carrera}</td>
                            <td>${alumno.fecha_reg}</td>
                        <tr>
                  `
                     })
                    $('#tb-alumnos').html(template)
                }
            })
        }

        //cambiar contraseña de admin
    $('#form-pass').submit(function(e){
        e.preventDefault()
        var formpass = $('#form-pass').serialize();
        $.ajax({
            type: "POST",
            url: 'bd/cpass.php',
            data: formpass,
            success: function(response){
               console.log(response)
               if (response == 'success') {
                    $('#form-pass').trigger('reset')
                    $('#alert-config-1').removeClass('d-none')
                    $('#alert-config-2').addClass('d-none')
                    $('#alert-config-3').addClass('d-none')
                }else if(response == 'error de ejecucion'){
                    $('#alert-config-1').addClass('d-none')
                    $('#alert-config-2').removeClass('d-none')
                    $('#alert-config-3').addClass('d-none')                    
                }else if(response == 'completar campos'){
                    $('#alert-config-1').addClass('d-none')
                    $('#alert-config-2').addClass('d-none')
                    $('#alert-config-3').removeClass('d-none')
                }
            }
        })
    })


    //Exportar datos de las carreras a un archivo xml

    //automotriz
    $("#btn-export-iau").click(function(){
        $("#tbiau").table2excel({
            exclude: ".noExl",
            name: "Automotriz",
            filename: "IngAuto",
            fileext: ".xls"
        }); 
    })

    //energia
    $("#btn-export-iee").click(function(){
        $("#tbiee").table2excel({
            exclude: ".noExl",
            name: "Energia",
            filename: "IngEnergia",
            fileext: ".xls"
        }); 
    })

    //software
    $("#btn-export-isw").click(function(){
        $("#tbisw").table2excel({
            exclude: ".noExl",
            name: "Software",
            filename: "IngSoft",
            fileext: ".xls"
        }); 
    })

    //manufactura
    $("#btn-export-itm").click(function(){
        $("#tbitm").table2excel({
            exclude: ".noExl",
            name: "Manufactura",
            filename: "IngManu",
            fileext: ".xls"
        }); 
    })

    //Terapia
    $("#btn-export-tf").click(function(){
        $("#tbtf").table2excel({
            exclude: ".noExl",
            name: "Terapia fisica",
            filename: "TerFisica",
            fileext: ".xls"
        }); 
    })

    //conteo general

    function conteogral(){
        $.ajax({
            url: 'bd/conteogral.php',
             type: 'GET',
            success: function (response) {
                if(!response.error) {
                    let template = ''
                    const respuesta = response
                    template += `
                        <p>${respuesta}</p>
                    `
                    $('#conteo-gral').html(template)
                }
            }
        })
    }


    //funcion para el conteo de alumnos con sus siglas de carrera
    function conteoisw(){
        $.ajax({
            url: 'bd/conteo1.php',
             type: 'GET',
            success: function (response) {
                if(!response.error) {
                    let template = ''
                    const respuesta = response
                    template += `
                        <p>${respuesta}</p>
                    `
                    $('#conteo-isw').html(template)
                }
            }
        })
    }
    function conteoiee(){
        $.ajax({
            url: 'bd/conteo2.php',
             type: 'GET',
            success: function (response) {
                if(!response.error) {
                    let template = ''
                    const respuesta = response
                    template += `
                        <p>${respuesta}</p>
                    `
                    $('#conteo-iee').html(template)
                }
            }
        })
    }
    function conteoiau(){
        $.ajax({
            url: 'bd/conteo4.php',
             type: 'GET',
            success: function (response) {
                if(!response.error) {
                    let template = ''
                    const respuesta = response
                    template += `
                        <p>${respuesta}</p>
                    `
                    $('#conteo-iau').html(template)
                }
            }
        })
    }
    function conteoitm(){
        $.ajax({
            url: 'bd/conteo5.php',
             type: 'GET',
            success: function (response) {
                if(!response.error) {
                    let template = ''
                    const respuesta = response
                    template += `
                        <p>${respuesta}</p>
                    `
                    $('#conteo-itm').html(template)
                }
            }
        })
    }
    function conteotf(){
        $.ajax({
            url: 'bd/conteo3.php',
             type: 'GET',
            success: function (response) {
                if(!response.error) {
                    let template = ''
                    const respuesta = response
                    template += `
                        <p>${respuesta}</p>
                    `
                    $('#conteo-tf').html(template)
                }
            }
        })
    }



    /*----------------Metodos para ingenieria en software-------------*/

    //función por botón software

    $('#btn-isw').on('click', (e) =>{
        document.location.href = 'datosisw.php'
    })

    //funcion llenar los datos de la tabla de la carrera de software

        function tbisw(){
            $.ajax({
            url: 'bd/tbdatosisw.php',
            type: 'GET',
            success: function(response){
                let alumnos = JSON.parse(response)
                let template = ''
                alumnos.forEach(alumno => {
                    template +=`
                    <tr alumnoID='${alumno.id_alumno}'>
                        <td><a href="#" class="isw-edit">${alumno.id_alumno}</a></td>
                        <td>${alumno.nombre1}</td>
                        <td>${alumno.nombre2}</td>
                        <td>${alumno.apaterno}</td>
                        <td>${alumno.amaterno}</td>
                        <td>${alumno.carrera}</td>
                        <td>${alumno.estado_ti}</td>
                        <td>${alumno.estado_tra}</td>
                        <td>${alumno.tel_cel}</td>
                        <td>
                            <button class='borrar-alumno btn btn-outline-danger'>${alumno.fecha_reg}</button>
                        </td>
                    <tr>
                  `
                })
                $('#tb-datos').html(template)
            }
            })
        }
        
    //buscar datos en la carrera de software en la carrera de software

    $('#search').keyup(function() {
      if($('#search').val()) {
        let search = $('#search').val();
        $.ajax({
          url: 'bd/buscar.php',
          data: {search},
          type: 'POST',
          success: function (response) {
            if(!response.error) {

                let alumnos = JSON.parse(response)
                let template = ''
                alumnos.forEach(alumno => {
                //el template debe ser aplicado a la version final de cada busqueda.
                template += `
                <li>${alumno.id_alumno} ${alumno.nombre1} ${alumno.nombre2} ${alumno.apaterno} ${alumno.amaterno}</li>`
                })
                $('#result-search').show();
                $('#container').html(template);
            }
          } 
        })
      }
    })

    //borrar datos de la tabla isw

    $(document).on('click', '.borrar-alumno', function(){
        if (confirm('¿Esta seguro de eliminar este elemento?')) {
            let element = $(this)[0].parentElement.parentElement
            let id = $(element).attr('alumnoID')
            $.post('bd/borrar.php', {id}, function(response){
                tbisw()
                conteoisw()
            })
        }
    })

    //mostrar datos de un alumno en el formulario de edicion

    $(document).on('click', '.isw-edit', function(){
        let element = $(this)[0].parentElement.parentElement
        let id = $(element).attr('alumnoID')
        $.post('bd/alumnosolo.php', {id}, function(response){

            const alumnos = JSON.parse(response)
            $('#idalume').val(alumnos.id_alumno)
            $('#nombre1e').val(alumnos.nombre1)
            $('#nombre2e').val(alumnos.nombre2)
            $('#apaternoe').val(alumnos.apaterno)
            $('#amaternoe').val(alumnos.amaterno)
            $('#carrerase').val(alumnos.id_carrera)
            $('#tituloe').val(alumnos.id_est_ti)
            $('#trabajoe').val(alumnos.id_est_tra)
            $('#razone').val(alumnos.razon)
            $('#telecele').val(alumnos.tel_cel)
            $('#telfie').val(alumnos.tel_fijo)
            $('#correoe').val(alumnos.correo)
        })
    })

    //funcion para editar datos del formulario
    $('#form-edit').submit(function(e){
        e.preventDefault()
        var formedit = $('#form-edit').serialize();
        $.ajax({
            type: "POST",
            url: 'bd/editar.php',
            data: formedit,
            success: function(response){
                if (response == 'success') {
                    tbisw()
                    $('#form-edit').trigger('reset')
                    $('#alert-isw-1').removeClass('d-none')
                    $('#alert-isw-2').addClass('d-none')
                    $('#alert-isw-3').addClass('d-none')
                    $('#alert-isw-4').addClass('d-none')
                }else if(response == 'error de ejecucion'){
                    $('#alert-isw-1').addClass('d-none')
                    $('#alert-isw-2').removeClass('d-none')
                    $('#alert-isw-3').addClass('d-none')
                    $('#alert-isw-4').addClass('d-none')
                    
                }else if(response == 'error datos vacios'){
                    $('#alert-isw-1').addClass('d-none')
                    $('#alert-isw-2').addClass('d-none')
                    $('#alert-isw-3').removeClass('d-none')
                    $('#alert-isw-4').addClass('d-none')
                }else if(response == 'error al encontrar los datos'){
                    $('#alert-isw-1').addClass('d-none')
                    $('#alert-isw-2').addClass('d-none')
                    $('#alert-isw-3').addClass('d-none')
                    $('#alert-isw-4').removeClass('d-none')
                }
            }
        })
    })

    /*----------------Metodos para ingenieria automotriz-------------*/

    //funcion para el boton de automotriz
    $('#btn-iau').on('click', (e) =>{
        document.location.href = 'datosau.php'
    })

    //funcion para llenar la tabla en automotriz
    function tbiau(){
            $.ajax({
            url: 'bd/tbdatosiau.php',
            type: 'GET',
            success: function(response){
                let alumnos = JSON.parse(response)
                let template = ''
                alumnos.forEach(alumno => {
                    template +=`
                    <tr alumnoID2='${alumno.id_alumno}'>
                        <td><a href="#" class="iau-edit">${alumno.id_alumno}</a></td>
                        <td>${alumno.nombre1}</td>
                        <td>${alumno.nombre2}</td>
                        <td>${alumno.apaterno}</td>
                        <td>${alumno.amaterno}</td>
                        <td>${alumno.carrera}</td>
                        <td>${alumno.estado_ti}</td>
                        <td>${alumno.estado_tra}</td>
                        <td>${alumno.tel_cel}</td>
                        <td>
                            <button class='borrar-alumno2 btn btn-outline-danger'>${alumno.fecha_reg}</button>
                        </td>
                    <tr>
                  `
                })
                $('#tb-datos2').html(template)
            }
        })
    }

    //buscar datos en la carrera de software en la carrera de autmotriz

    $('#search').keyup(function() {
      if($('#search').val()) {
        let search = $('#search').val();
        $.ajax({
          url: 'bd/buscar2.php',
          data: {search},
          type: 'POST',
          success: function (response) {
            if(!response.error) {
                let alumnos = JSON.parse(response)
                let template = ''
                alumnos.forEach(alumno => {
                template += `
                <li>${alumno.id_alumno} ${alumno.nombre1} ${alumno.nombre2} ${alumno.apaterno} ${alumno.amaterno}</li>`
                })
                $('#result-search2').show();
                $('#container2').html(template);
            }
          } 
        })
      }
    })

    //borrar datos de la tabla

    $(document).on('click', '.borrar-alumno2', function(){
        if (confirm('¿Esta seguro de eliminar este elemento?')) {
            let element = $(this)[0].parentElement.parentElement
            let id = $(element).attr('alumnoID2')
            $.post('bd/borrar.php', {id}, function(response){
                tbiau()
                conteoiau()
            })
        }
    })

    //mostrar datos de un alumno en el formulario de edicion

    $(document).on('click', '.iau-edit', function(){
        let element = $(this)[0].parentElement.parentElement
        let id = $(element).attr('alumnoID2')
        $.post('bd/alumnosolo.php', {id}, function(response){

            const alumnos = JSON.parse(response)
            $('#idalume2').val(alumnos.id_alumno)
            $('#nombre1e2').val(alumnos.nombre1)
            $('#nombre2e2').val(alumnos.nombre2)
            $('#apaternoe2').val(alumnos.apaterno)
            $('#amaternoe2').val(alumnos.amaterno)
            $('#carrerase2').val(alumnos.id_carrera)
            $('#tituloe2').val(alumnos.id_est_ti)
            $('#trabajoe2').val(alumnos.id_est_tra)
            $('#razone2').val(alumnos.razon)
            $('#telecele2').val(alumnos.tel_cel)
            $('#telfie2').val(alumnos.tel_fijo)
            $('#correoe2').val(alumnos.correo)
        })
    })

    //funcion para editar y guardar los datos del formulario
    $('#form-edit-iau').submit(function(e){
        e.preventDefault()
        var formedit = $('#form-edit-iau').serialize();
        $.ajax({
            type: "POST",
            url: 'bd/editar2.php',
            data: formedit,
            success: function(response){
                if (response == 'success') {
                    tbiau()
                    $('#form-edit-iau').trigger('reset')
                    $('#alert-iau-1').removeClass('d-none')
                    $('#alert-iau-2').addClass('d-none')
                    $('#alert-iau-3').addClass('d-none')
                    $('#alert-iau-4').addClass('d-none')
                }else if(response == 'error de ejecucion'){
                    $('#alert-iau-1').addClass('d-none')
                    $('#alert-iau-2').removeClass('d-none')
                    $('#alert-iau-3').addClass('d-none')
                    $('#alert-iau-4').addClass('d-none')
                    
                }else if(response == 'error datos vacios'){
                    $('#alert-iau-1').addClass('d-none')
                    $('#alert-iau-2').addClass('d-none')
                    $('#alert-iau-3').removeClass('d-none')
                    $('#alert-iau-4').addClass('d-none')
                }else if(response == 'error al encontrar los datos'){
                    $('#alert-iau-1').addClass('d-none')
                    $('#alert-iau-2').addClass('d-none')
                    $('#alert-iau-3').addClass('d-none')
                    $('#alert-iau-4').removeClass('d-none')
                }
            }
        })
    })

    /*-----------------Funciones para ingenieria en energia-----------------*/

    //funcion del boton de energia

    $('#btn-iee').on('click', (e) =>{
        document.location.href = 'datosie.php'
    })

    //funcion para llenar la tabla de energia

    function tbiee(){
            $.ajax({
            url: 'bd/tbdatoiee.php',
            type: 'GET',
            success: function(response){
                let alumnos = JSON.parse(response)
                let template = ''
                alumnos.forEach(alumno => {
                    template +=`
                    <tr alumnoID3='${alumno.id_alumno}'>
                        <td><a href="#" class="iee-edit">${alumno.id_alumno}</a></td>
                        <td>${alumno.nombre1}</td>
                        <td>${alumno.nombre2}</td>
                        <td>${alumno.apaterno}</td>
                        <td>${alumno.amaterno}</td>
                        <td>${alumno.carrera}</td>
                        <td>${alumno.estado_ti}</td>
                        <td>${alumno.estado_tra}</td>
                        <td>${alumno.tel_cel}</td>
                        <td>
                            <button class='borrar-alumno3 btn btn-outline-danger'>${alumno.fecha_reg}</button>
                        </td>
                    <tr>
                  `
                })
                $('#tb-datos3').html(template)
            }
        })
    }

    //buscar datos en la carrera de energia

    $('#search').keyup(function() {
      if($('#search').val()) {
        let search = $('#search').val();
        $.ajax({
          url: 'bd/buscar3.php',
          data: {search},
          type: 'POST',
          success: function (response) {
            if(!response.error) {
                console.log(response)
                let alumnos = JSON.parse(response)
                let template = ''
                alumnos.forEach(alumno => {
                template += `
                <li>${alumno.id_alumno} ${alumno.nombre1} ${alumno.nombre2} ${alumno.apaterno} ${alumno.amaterno}</li>`
                })
                $('#result-search3').show();
                $('#container3').html(template);
            }
          } 
        })
      }
    })

    //borrar datos de la tabla de energia

    $(document).on('click', '.borrar-alumno3', function(){
        if (confirm('¿Esta seguro de eliminar este elemento?')) {
            let element = $(this)[0].parentElement.parentElement
            let id = $(element).attr('alumnoID3')
            $.post('bd/borrar.php', {id}, function(response){
                tbiee()
                conteoiee()
            })
        }
    })

    //mostrar datos de un alumno en el formulario de edicion

    $(document).on('click', '.iee-edit', function(){
        let element = $(this)[0].parentElement.parentElement
        let id = $(element).attr('alumnoID3')
        $.post('bd/alumnosolo.php', {id}, function(response){

            const alumnos = JSON.parse(response)
            $('#idalume3').val(alumnos.id_alumno)
            $('#nombre1e3').val(alumnos.nombre1)
            $('#nombre2e3').val(alumnos.nombre2)
            $('#apaternoe3').val(alumnos.apaterno)
            $('#amaternoe3').val(alumnos.amaterno)
            $('#carrerase3').val(alumnos.id_carrera)
            $('#tituloe3').val(alumnos.id_est_ti)
            $('#trabajoe3').val(alumnos.id_est_tra)
            $('#razone3').val(alumnos.razon)
            $('#telecele3').val(alumnos.tel_cel)
            $('#telfie3').val(alumnos.tel_fijo)
            $('#correoe3').val(alumnos.correo)
        })
    })

    //funcion para editar y guardar los datos del formulario
    $('#form-edit-iee').submit(function(e){
        e.preventDefault()
        var formedit = $('#form-edit-iee').serialize();
        $.ajax({
            type: "POST",
            url: 'bd/editar3.php',
            data: formedit,
            success: function(response){
                if (response == 'success') {
                    tbiee()
                    $('#form-edit-iee').trigger('reset')
                    $('#alert-iee-1').removeClass('d-none')
                    $('#alert-iee-2').addClass('d-none')
                    $('#alert-iee-3').addClass('d-none')
                    $('#alert-iee-4').addClass('d-none')
                }else if(response == 'error de ejecucion'){
                    $('#alert-iee-1').addClass('d-none')
                    $('#alert-iee-2').removeClass('d-none')
                    $('#alert-iee-3').addClass('d-none')
                    $('#alert-iee-4').addClass('d-none')
                    
                }else if(response == 'error datos vacios'){
                    $('#alert-iee-1').addClass('d-none')
                    $('#alert-iee-2').addClass('d-none')
                    $('#alert-iee-3').removeClass('d-none')
                    $('#alert-iee-4').addClass('d-none')
                }else if(response == 'error al encontrar los datos'){
                    $('#alert-iee-1').addClass('d-none')
                    $('#alert-iee-2').addClass('d-none')
                    $('#alert-iee-3').addClass('d-none')
                    $('#alert-iee-4').removeClass('d-none')
                }
            }
        })
    })

    /*---------------Funciones para terapia fisica----------------------*/

    //funcion para el boton de terapia fisica

    $('#btn-tf').on('click', (e) =>{
        document.location.href = 'datostf.php'
    })

    //funcion para llenar la tabla de terapia fisica

    function tbtf(){
            $.ajax({
            url: 'bd/tbdatostf.php',
            type: 'GET',
            success: function(response){
                let alumnos = JSON.parse(response)
                let template = ''
                alumnos.forEach(alumno => {
                    template +=`
                    <tr alumnoID4='${alumno.id_alumno}'>
                        <td><a href="#" class="tf-edit">${alumno.id_alumno}</a></td>
                        <td>${alumno.nombre1}</td>
                        <td>${alumno.nombre2}</td>
                        <td>${alumno.apaterno}</td>
                        <td>${alumno.amaterno}</td>
                        <td>${alumno.carrera}</td>
                        <td>${alumno.estado_ti}</td>
                        <td>${alumno.estado_tra}</td>
                        <td>${alumno.tel_cel}</td>
                        <td>
                            <button class='borrar-alumno4 btn btn-outline-danger'>${alumno.fecha_reg}</button>
                        </td>
                    <tr>
                  `
                })
                $('#tb-datos4').html(template)
            
            }
        })
    }

    //buscar datos en la carrera de software en la carrera de terapia fisica

    $('#search').keyup(function() {
      if($('#search').val()) {
        let search = $('#search').val();
        $.ajax({
          url: 'bd/buscar4.php',
          data: {search},
          type: 'POST',
          success: function (response) {
            if(!response.error) {
                console.log(response)
                let alumnos = JSON.parse(response)
                let template = ''
                alumnos.forEach(alumno => {
                template += `
                <li>${alumno.id_alumno} ${alumno.nombre1} ${alumno.nombre2} ${alumno.apaterno} ${alumno.amaterno}</li>`
                })
                $('#result-search4').show();
                $('#container4').html(template);
            }
          } 
        })
      }
    })

    //borrar datos de la tabla de terapia fisica

    $(document).on('click', '.borrar-alumno4', function(){
        if (confirm('¿Esta seguro de eliminar este elemento?')) {
            let element = $(this)[0].parentElement.parentElement
            let id = $(element).attr('alumnoID4')
            $.post('bd/borrar.php', {id}, function(response){
                tbtf()
                conteotf()
            })
        }
    })

    //mostrar datos de un alumno en el formulario de edicion

    $(document).on('click', '.tf-edit', function(){
        let element = $(this)[0].parentElement.parentElement
        let id = $(element).attr('alumnoID4')
        $.post('bd/alumnosolo.php', {id}, function(response){

            const alumnos = JSON.parse(response)
            $('#idalume4').val(alumnos.id_alumno)
            $('#nombre1e4').val(alumnos.nombre1)
            $('#nombre2e4').val(alumnos.nombre2)
            $('#apaternoe4').val(alumnos.apaterno)
            $('#amaternoe4').val(alumnos.amaterno)
            $('#carrerase4').val(alumnos.id_carrera)
            $('#tituloe4').val(alumnos.id_est_ti)
            $('#trabajoe4').val(alumnos.id_est_tra)
            $('#razone4').val(alumnos.razon)
            $('#telecele4').val(alumnos.tel_cel)
            $('#telfie4').val(alumnos.tel_fijo)
            $('#correoe4').val(alumnos.correo)
        })
    })

    //funcion para editar y guardar los datos del formulario
    $('#form-edit-tf').submit(function(e){
        e.preventDefault()
        var formedit = $('#form-edit-tf').serialize();
        $.ajax({
            type: "POST",
            url: 'bd/editar4.php',
            data: formedit,
            success: function(response){
                if (response == 'success') {
                    tbtf()
                    $('#form-edit-tf').trigger('reset')
                    $('#alert-tf-1').removeClass('d-none')
                    $('#alert-tf-2').addClass('d-none')
                    $('#alert-tf-3').addClass('d-none')
                    $('#alert-tf-4').addClass('d-none')
                }else if(response == 'error de ejecucion'){
                    $('#alert-tf-1').addClass('d-none')
                    $('#alert-tf-2').removeClass('d-none')
                    $('#alert-tf-3').addClass('d-none')
                    $('#alert-tf-4').addClass('d-none')
                    
                }else if(response == 'error datos vacios'){
                    $('#alert-tf-1').addClass('d-none')
                    $('#alert-tf-2').addClass('d-none')
                    $('#alert-tf-3').removeClass('d-none')
                    $('#alert-tf-4').addClass('d-none')
                }else if(response == 'error al encontrar los datos'){
                    $('#alert-tf-1').addClass('d-none')
                    $('#alert-tf-2').addClass('d-none')
                    $('#alert-tf-3').addClass('d-none')
                    $('#alert-tf-4').removeClass('d-none')
                }
            }
        })
    })

    /*--------------------Funciones para manufactura---------------*/

    //funcion para el boton de manufactura

    $('#btn-tm').on('click', (e) =>{
        document.location.href = 'datostm.php'
    })

    //funcion para llenar la tabla de manufactura

    function tbitm(){
            $.ajax({
            url: 'bd/tbdatostm.php',
            type: 'GET',
            success: function(response){
                let alumnos = JSON.parse(response)
                let template = ''
                alumnos.forEach(alumno => {
                    template +=`
                    <tr alumnoID5='${alumno.id_alumno}'>
                        <td><a href="#" class="tm-edit">${alumno.id_alumno}</a></td>
                        <td>${alumno.nombre1}</td>
                        <td>${alumno.nombre2}</td>
                        <td>${alumno.apaterno}</td>
                        <td>${alumno.amaterno}</td>
                        <td>${alumno.carrera}</td>
                        <td>${alumno.estado_ti}</td>
                        <td>${alumno.estado_tra}</td>
                        <td>${alumno.tel_cel}</td>
                        <td>
                            <button class='borrar-alumno5 btn btn-outline-danger'>${alumno.fecha_reg}</button>
                        </td>
                    <tr>
                  `
                })
                $('#tb-datos5').html(template)
            
            }
        })
    }

    //buscar datos en la carrera de software en la carrera de manufactura

    $('#search').keyup(function() {
      if($('#search').val()) {
        let search = $('#search').val();
        $.ajax({
          url: 'bd/buscar5.php',
          data: {search},
          type: 'POST',
          success: function (response) {
            if(!response.error) {
                console.log(response)
                let alumnos = JSON.parse(response)
                let template = ''
                alumnos.forEach(alumno => {
                template += `
                <li>${alumno.id_alumno} ${alumno.nombre1} ${alumno.nombre2} ${alumno.apaterno} ${alumno.amaterno}</li>`
                })
                $('#result-search5').show();
                $('#container5').html(template);
            }
          } 
        })
      }
    })

    //borrar datos de la tabla de manufactura

    $(document).on('click', '.borrar-alumno5', function(){
        if (confirm('¿Esta seguro de eliminar este elemento?')) {
            let element = $(this)[0].parentElement.parentElement
            let id = $(element).attr('alumnoID5')
            $.post('bd/borrar.php', {id}, function(response){
                tbitm()
                conteoitm()
            })
        }
    })

     //mostrar datos de un alumno en el formulario de edicion

    $(document).on('click', '.tm-edit', function(){
        let element = $(this)[0].parentElement.parentElement
        let id = $(element).attr('alumnoID5')
        $.post('bd/alumnosolo.php', {id}, function(response){

            const alumnos = JSON.parse(response)
            $('#idalume5').val(alumnos.id_alumno)
            $('#nombre1e5').val(alumnos.nombre1)
            $('#nombre2e5').val(alumnos.nombre2)
            $('#apaternoe5').val(alumnos.apaterno)
            $('#amaternoe5').val(alumnos.amaterno)
            $('#carrerase5').val(alumnos.id_carrera)
            $('#tituloe5').val(alumnos.id_est_ti)
            $('#trabajoe5').val(alumnos.id_est_tra)
            $('#razone5').val(alumnos.razon)
            $('#telecele5').val(alumnos.tel_cel)
            $('#telfie5').val(alumnos.tel_fijo)
            $('#correoe5').val(alumnos.correo)
        })
    })

    //funcion para editar y guardar los datos del formulario
    $('#form-edit-tm').submit(function(e){
        e.preventDefault()
        var formedit = $('#form-edit-tm').serialize();
        $.ajax({
            type: "POST",
            url: 'bd/editar5.php',
            data: formedit,
            success: function(response){
                if (response == 'success') {
                    tbitm()
                    $('#form-edit-tm').trigger('reset')
                    $('#alert-itm-1').removeClass('d-none')
                    $('#alert-itm-2').addClass('d-none')
                    $('#alert-itm-3').addClass('d-none')
                    $('#alert-itm-4').addClass('d-none')
                }else if(response == 'error de ejecucion'){
                    $('#alert-itm-1').addClass('d-none')
                    $('#alert-itm-2').removeClass('d-none')
                    $('#alert-itm-3').addClass('d-none')
                    $('#alert-itm-4').addClass('d-none')
                    
                }else if(response == 'error datos vacios'){
                    $('#alert-itm-1').addClass('d-none')
                    $('#alert-itm-2').addClass('d-none')
                    $('#alert-itm-3').removeClass('d-none')
                    $('#alert-itm-4').addClass('d-none')
                }else if(response == 'error al encontrar los datos'){
                    $('#alert-itm-1').addClass('d-none')
                    $('#alert-itm-2').addClass('d-none')
                    $('#alert-itm-3').addClass('d-none')
                    $('#alert-itm-4').removeClass('d-none')
                }
            }
        })
    })




//Linea final del codigo
})