Highcharts.chart('chart', {
	title: {
		text: 'Monthly turnover 2018'
	},
	subtitle: {
		text: 'Example made by Remzi Cavdar'
	},
	yAxis: {
		title: {
			text: 'Turnover'
		}
	},
    xAxis: {
		title: {
			text: 'Months'
		}
	},
	legend: {
		layout: 'vertical',
		align: 'right',
		verticalAlign: 'middle'
	},
	plotOptions: {
		series: {
			label: {
				connectorAllowed: false
			},
			pointStart: 1
		}
	},
	series: [{
		name: 'Teddybear',
		data: [3.789,33, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
	}, {
		name: 'Table',
		data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
	}, {
		name: 'Chair',
		data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
	}, {
		name: 'Lamp',
		data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
	}],
	responsive: {
		rules: [{
			condition: {
				maxWidth: 500
			},
			chartOptions: {
				legend: {
					layout: 'horizontal',
					align: 'center',
					verticalAlign: 'bottom'
				}
			}
		}]
	}
});
