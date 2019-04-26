anychart.onDocumentReady(function() {

  // set the data
  var data = [
      {x: "Training", value: 40},
      {x: "Vacation", value: 60},
  ]; 

  // create the chart
  var chart = anychart.pie();

  // set the chart title
  // chart.title("Population by Race for the United States: 2010 Census");

  // add the data
  chart.data(data);

  // display the chart in the container
  chart.container('Mycontainer');
  chart.draw();

});


 