function count(key,data){

  var dateCountMap =  [];
  data.forEach(function(d){
    dateCountMap[(d["measurement_time"]).split("T")[0]] = (dateCountMap[(d["measurement_time"]).split("T")[0]] + 1) || 1 ;
  })
  console.log(dateCountMap)

}


function areaChart(){



  var margin = {top: 10, right: 10, bottom: 100, left: 40},
      margin2 = {top: 330, right: 10, bottom: 20, left: 40}, 
      width = 860 - margin.left - margin.right,
      height = 400 - margin.top - margin.bottom,
      height2 = 400 - margin2.top - margin2.bottom;

  /*var parseDate = d3.time.format("%b %Y").parse;*/
  var parseDate = d3.time.format("%m/%d/%Y").parse;

  var x = d3.time.scale().range([0, width]),
      x2 = d3.time.scale().range([0, width-20]),
      y = d3.scale.linear().range([height, 0]),
      y2 = d3.scale.linear().range([height2, 0]);

  var xAxis = d3.svg.axis().scale(x).orient("bottom"),
      xAxis2 = d3.svg.axis().scale(x2).orient("bottom"),
      yAxis = d3.svg.axis().scale(y).orient("left");

  var brush = d3.svg.brush()
      .x(x2)
      .on("brush", brushed);

  var area = d3.svg.area()
      .interpolate("bundle")
      .x(function(d) { return x(d.measurement_time); })
      .y0(height)
      .y1(function(d) { return y(d.values); });

  var area2 = d3.svg.area()
      .interpolate("bundle")
      .x(function(d) {  return x2(d.measurement_time); })
      .y0(height2)
      .y1(function(d) {  return y2(d.values); });

  var svg = d3.select("body").append("svg")
      .attr("width", width + margin.left + margin.right)
      .attr("height", height + margin.top + margin.bottom);

  // addding background color to svg.
  svg.append("rect")
      .attr("width", "100%")
      .attr("height", "100%")
      .attr("fill", "WhiteSmoke");

  svg.append("g")
      .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

  svg.append("defs").append("clipPath")
      .attr("id", "clip")
      .append("rect") 
      .attr("width", width)
      .attr("height", height);

  var focus = svg.append("g")
      .attr("class", "focus")
      .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

  var context = svg.append("g")
      .attr("class", "context")
      .attr("transform", "translate(" + margin2.left + "," + margin2.top + ")");

  d3.json("patient_records.json", function(error,data1) {

    //data = data1.map(function(d){ if(d.vitalsign == "Oral Temperature" )return d; else delete d;})
    var data = $.grep(data1, function (element, index) {
    return element.vitalsign == "Peripheral Pulse Rate";
    })
    
    console.log(data)
    data = data.map(function(d){return type(d);})
    
    x.domain(d3.extent(data.map(function(d) { return d.measurement_time;})));
    y.domain([0, d3.max(data.map(function(d) {return d.values; }))]);
    x2.domain(x.domain());
    y2.domain(y.domain());
      

    focus.append("path")
        .datum(data)
        .attr("class", "area")
        .attr("d", area);

    focus.append("g")
        .attr("class", "x axis")
        .attr("transform", "translate(0," + height + ")")
        .call(xAxis);

    focus.append("g")
        .attr("class", "y axis")
        .call(yAxis);

    context.append("path")
        .datum(data)
        .attr("class", "area")
        .attr("d", area2);


    context.append("g")
        .attr("class", "x axis")
        .attr("transform", "translate(0," + height2 + ")")
        .call(xAxis2);

    context.append("g")
        .attr("class", "x brush")
        .call(brush)
        .selectAll("rect")
        .attr("y", -6)
        .attr("height", height2 + 7);
  });

  function brushed() {
    x.domain(brush.empty() ? x2.domain() : brush.extent());
    focus.select(".area").attr("d", area);
    focus.select(".x.axis").call(xAxis);
  }

  function type(d) {
    d.measurement_time = parseDate((d.measurement_time).split(" ")[0]);
    d.values = +d.values;
    //console.log(d.date);
    //console.log(d.price);
    return d;
  }
}
