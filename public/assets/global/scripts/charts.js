
// generate datatable
function generateDatatable(id, tableColumns, url, sortBy, sortOrder) {
    var columns = eval(tableColumns);

    $('#'+id).DataTable({
        dom: 'rt<"row"<"col-md-4 col-sm-4"l><"col-md-4 col-sm-4 text-center"i><"col-md-4 col-sm-4"p>>',
        language: {
            search: "",
            searchPlaceholder: "Search",
        },
        lengthMenu: [
            [10, 20, 50, 100, 150, 200, -1],
            [10, 20, 50, 100, 150, 200, "All"]
        ],
        pagingType: "full_numbers",
        order: [
            [0, "desc"]
        ],
        processing: true,
        serverSide: true,
        fnRowCallback : function(nRow, aData, iDisplayIndex){
            $("td:first", nRow).html(iDisplayIndex +1);
            return nRow;
        },
        ajax: {
            url: url,
        },
        columns: columns,
        //destroy datatable when change tab
        /*stateSave: true,
        "bDestroy": true*/
    });
}
