am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end
    
    // Create chart instance
    var chart = am4core.create("chartdiv", am4charts.PieChart3D);
    
    // Add data
    chart.data = [ {
      "country": "ICO",
      "litres": 15
    }, {
      "country": "Liquidity Incentives",
      "litres": 15
    }, {
      "country": "Ecosystem Growth",
      "litres": 20
    }, {
        "country": "Airdrop & Holder Bonus",
        "litres": 5
    },{
        "country": "Team",
        "litres": 10
      }, {
        "country": "Strategic Sale",
        "litres": 20
      }, {
        "country": "Seed Sale",
        "litres": 15
      }];
    
    // Add and configure Series
    
// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "litres";
pieSeries.dataFields.category = "country";
pieSeries.labels.template.disabled = true;

chart.radius = am4core.percent(95);

// Create custom legend
chart.events.on("ready", function(event) {
  // populate our custom legend when chart renders
  chart.customLegend = document.getElementById('legend');
  pieSeries.dataItems.each(function(row, i) {
    var color = chart.colors.getIndex(i);
    var percent = Math.round(row.values.value.percent * 100) / 100;
    var value = row.value;
    legend.innerHTML += '<div class="legend-item" id="legend-item-' + i + '" onclick="toggleSlice(' + i + ');" onmouseover="hoverSlice(' + i + ');" onmouseout="blurSlice(' + i + ');" style="color: ' + color + ';"><div class="legend-marker" style="background: ' + color + '"></div>' + row.category + '<div class="legend-value">' + value + '%</div></div>';
  });
});

function toggleSlice(item) {
  var slice = pieSeries.dataItems.getIndex(item);
  if (slice.visible) {
    slice.hide();
  }
  else {
    slice.show();
  }
}

function hoverSlice(item) {
  var slice = pieSeries.slices.getIndex(item);
  slice.isHover = true;
}

function blurSlice(item) {
  var slice = pieSeries.slices.getIndex(item);
  slice.isHover = false;
}
    
    }); // end am4core.ready()
    