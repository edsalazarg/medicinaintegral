"use strict";
// Class definition

var UsersView = function() {
    // Private functions

    // init datatable
    var initDatatble = function() {
        var datatable = $('#users_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'local',
                source: users,
                pageSize: 10
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#users_subheader_search_form'),
                delay: 400,
                key: 'generalSearch'
            },

            // columns definition
            columns: [
                {
                    field: 'name',
                    title: 'Nombre',
                    sortable: 'asc',
                    selector: false,
                    textAlign: 'left',
                    template: function(data) {
                        return data.name
                    }
                },
                {
                    field: 'email',
                    title: 'Correo electrónico',
                    selector: false,
                    textAlign: 'left',
                    template: function(data) {
                        return data.email
                    }
                },
            ],
        });
    };

    return {
        // public functions
        init: function() {
            initDatatble();
        },
    };
}();

jQuery(document).ready(function() {
    UsersView.init();
});
