$(document).ready(function () {
    $.ajax({
        url: "http://localhost/Estacionamientos/public/graficos/data",
        method: 'get',
        success: function (datos) {
            new Morris.Bar({
                // ID of the element in which to draw the chart.
                element: 'myfirstchart',
                // Chart data records -- each entry in this array corresponds to a point on
                // the chart.
                data: datos,
                // The name of the data record attribute that contains x-values.
                xkey: 'ano',
                // A list of names of data record attributes that contain y-values.
                ykeys: ['valor'],
                // Labels for the ykeys -- will be displayed when you hover over the
                // chart.
                labels: ['Valor']
            });
        }
    });
});