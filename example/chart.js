document.addEventListener('DOMContentLoaded', function () {

    // Data
    var teddybearData = [318, 335, 121, 177, 20, 165, 22, 163, 24, 162, 25, 145];

    var tableData = [138, 635, 21, 177, 20, 165, 22, 163, 24, 162, 25, 145];

    var chairData = [198, 635, 21, 177, 20, 165, 22, 163, 24, 162, 25, 145];

    var lampData = [218, 635, 21, 177, 20, 165, 22, 163, 24, 162, 25, 145];


    var chartOptions = {
        chart: {
            renderTo: 'container'
        },
        title: {
            text: 'Monthly turnover 2018'
        },
        subtitle: {
            text: 'Example made by Remzi Cavdar'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
    		title: {
    			text: 'Turnover'
    		}
    	},
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        series: [{
            name: 'Teddybear',
            data: teddybearData
        }, {
            name: 'Table',
            data: tableData
        }, {
            name: 'Chair',
            data: chairData
        }, {
            name: 'Lamp',
            data: lampData
        }],
    };

    var chart = new Highcharts.Chart(chartOptions);
});
