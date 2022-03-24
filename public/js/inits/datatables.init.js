$(document).ready(function () {
    if($('#table_artikel_list').length) {
        var dtArtikel = $('#table_artikel_list').DataTable({
            search: true,
            info: false,
            // sDom: 'lrtip'
        });

        // dtArtikel.columns().every(function () {
        //     var that = this;

        //     $('#search_artikel').on('keyup change', function () {
        //         if(that.search() !== this.value) {
        //             that.search(this.value).draw();
        //         }
        //     })
        // })
    }

    if($('#table_infaq_list').length) {
        var dtArtikel = $('#table_infaq_list').DataTable({
            search: true,
            info: false,
        });
    }

    if($('#table_agenda').length) {
        var dtArtikel = $('#table_agenda').DataTable({
            search: true,
            info: false,
        });
    }
})
