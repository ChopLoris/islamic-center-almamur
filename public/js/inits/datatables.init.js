$(document).ready(function () {
    var dtArtikel = $('#table_artikel_list').DataTable({
        searching: true,
        paging: false,
        info: false,
        sDom: 'lrtip'
    });

    dtArtikel.columns().every(function () {
        var that = this;

        $('#search_artikel').on('keyup change', function () {
            if(that.search() !== this.value) {
                that.search(this.value).draw();
            }
        })
    })
})
