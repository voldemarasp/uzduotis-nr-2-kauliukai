$.getJSON("game.php", function(result) {
	$("#statistika").html('');

	$.each(result, function(i, field) {
		$("#statistika").append("<tr><td>" + field.id + "</td><td>" + field.rezultatas + "</td><td>" + field.data + "</td></tr>");
	});
});


var i = 0;
var laimejimas = [];

$( "#roll_dice" ).click(function() {

	i++;


	if (i < 5) {
		$("#kauliukas_pirmas").html('');
		$("#kauliukas_antras").html('');
		$("#kauliukas_trecias").html('');
		var random_skaicius1 = Math.floor((Math.random() * 6) + 1);
		var random_skaicius2 = Math.floor((Math.random() * 6) + 1);
		var random_skaicius3 = Math.floor((Math.random() * 6) + 1);
		$("#kauliukas_pirmas").html('<img class="img-fluid" src="images/' + random_skaicius1 +'.jpg">');
		$("#kauliukas_antras").html('<img class="img-fluid" src="images/' + random_skaicius2 +'.jpg">');
		$("#kauliukas_trecias").html('<img class="img-fluid" src="images/' + random_skaicius3 +'.jpg">');

		if (random_skaicius1 == random_skaicius2) { 
			laimejimas.push(random_skaicius1 * 0.1);
		} else if (random_skaicius1 == random_skaicius3) { 
			laimejimas.push(random_skaicius1 * 0.1); 
		} else if (random_skaicius2 == random_skaicius3) { 
			laimejimas.push(random_skaicius2 * 0.1); 
		} else { laimejimas.push(0); }

		var didziausias_laimejimas = Math.max.apply(Math,laimejimas);
		var didziausias_laimejimas2 = Math.round(didziausias_laimejimas*10) / 10;

		console.log(didziausias_laimejimas2);

	} 

	if (i === 4) {
		$.post("game.php", 
		{
			sukimas: i,
			rezultatas: didziausias_laimejimas2
		}, 
		function(response) {
			console.log('prideta');
		}
		);
		$.getJSON("game.php", function(result) {
				$("#statistika").html('');

				$.each(result, function(i, field) {
					$("#statistika").append("<tr><td>" + field.id + "</td><td>" + field.rezultatas + "</td><td>" + field.data + "</td></tr>");
				});
			});
	}

});

$( "#start_game" ).click(function() {
	location.reload();
});


var ctx = document.getElementById("myChart").getContext('2d');
var mixedChart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [],
        datasets: [{
            label: "",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [],
        }]
    },

    // Configuration options go here
    options: {}
});


$.getJSON("game.php", function(result) {

	$.each(result, function(i, field) {
	
	var aidy = field.id;
    var rezas = field.rezultatas;
    
    addData(mixedChart, aidy, rezas);

	});
});


function addData(chart, label, data) {
    chart.data.labels.push(label);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(data);
    });
    chart.update();
}