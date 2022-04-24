
window.addEventListener('DOMContentLoaded', event => {

    
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

function AbrirModalEditarContra(){
    $("#modal_ediatr_contra").modal({backdrop: 'static', keyboard: false})
    $("#modal_ediatr_contra").modal('show');
}
