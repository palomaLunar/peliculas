window.addEventListener('DOMContentLoaded', event => {

    const baseDatosTabla = document.getElementById('baseDatosTabla');
    if (baseDatosTabla) {
        new Datatables.DataTable(baseDatosTabla);
    }
});