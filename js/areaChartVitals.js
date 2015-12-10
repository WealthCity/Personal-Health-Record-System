function areaChart(selectedMetric,dataFilePath){

var normalRangeVital =[
   {
      "vitalSign":"Oral Temperature",
      "min":96,
      "max":99
   },
   {
      "vitalSign":"Systolic Blood Pressure",
      "min":120
   },
   {
      "vitalSign":"Peripheral Pulse Rate",
      "min":60,
      "max":100
   },
   {
      "vitalSign":"Diastolic Blood Pressure",
      "min":80
   },
   {
      "vitalSign":"Respiratory Rate",
      "min":12,
      "max":25
   },
   {
      "vitalSign":"Apical Heart Rate",
      "min":60,
      "max":100
   },
   {
      "vitalSign":"Oxygen Saturation",
      "min":95,
      "max":100
   }
];

var div = d3.select("body").append("div")   
    .attr("class", "tooltip")               
    .style("opacity", 0);

  var margin = {top: 10, right: 10, bottom: 100, left: 40},
      margin2 = {top: 330, right: 10, bottom: 20, left: 40}, 
      width = 860 - margin.left - margin.right,
      height = 400 - margin.top - margin.bottom,
      height2 = 400 - margin2.top - margin2.bottom;

  /*var parseDate = d3.time.format("%b %Y").parse;*/
  var parseDate = d3.time.format("%m/%d/%Y").parse;

  var x = d3.time.scale().range([0, width]),
      x2 = d3.time.scale().range([0, width]),
      y = d3.scale.linear().range([height, 0]),
      y2 = d3.scale.linear().range([height2, 0]);

  var xAxis = d3.svg.axis().scale(x).orient("bottom"),
      xAxis2 = d3.svg.axis().scale(x2).orient("bottom"),
      yAxis = d3.svg.axis().scale(y).orient("left");

  var brush = d3.svg.brush()
      .x(x2)
      .on("brush", brushed);

  var area = d3.svg.area()
      .interpolate("linear")
      .x(function(d) { return x(d.measurement_time); })
      .y0(height)
      .y1(function(d) { return y(d.value); });

  var area2 = d3.svg.area()
      .interpolate("linear ")
      .x(function(d) {  return x2(d.measurement_time); })
      .y0(height2)
      .y1(function(d) {  return y2(d.value); });

  
  var svg = d3.select("#areachart").append("svg")
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



  var circlegroup=null;

  function populateFilter(data1)
  {
    var uniquevitals =[];
    var vitaloptions="";
    data1.forEach(function(d) {
      if(d.vitalsign != "Height" && $.inArray(d.vitalsign,uniquevitals)==-1)
      {
        vitaloptions += '<option value="'+d.vitalsign+'">'+d.vitalsign+'</option>';  
        uniquevitals.push(d.vitalsign) 
      }
    });   
    $("#filter").html(vitaloptions);
  }
  d3.json(dataFilePath, function(error,data1) {

    //data = data1.map(function(d){ if(d.vitalsign == "Oral Temperature" )return d; else delete d;})
    var data = $.grep(data1, function (element, index) {
      return element.vitalsign == selectedMetric;
    });

    function comp(a, b) {
        return new Date(b["measurement_time"]).getTime() - new Date(a["measurement_time"]).getTime();
    }

    data = data.sort(comp);
    
    if(selectedMetric == "Oral Temperature")
      populateFilter(data1);
    
    //console.log(data)
    data = data.map(function(d){return type(d);})
    
    x.domain(d3.extent(data.map(function(d) { return d.measurement_time;})));
    y.domain([0, Math.ceil(d3.max(data.map(function(d) {return d.value; }))/10)*10]);
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

    circlegroup  = focus.append("g");
    circlegroup.selectAll('.dot')
    .data(data)
    .enter().append("circle")
    .attr('class', 'dot')
    .attr("cx",function(d){ return x(d.measurement_time)})
    .attr("cy", function(d){ return y(d.value);})
    .attr("r", function(d){ return 4;})
    .on("mouseover", function(d) {      
            div.transition()        
                .duration(200)      
                .style("opacity", .9);      
            div .html("Date :" + $.format.date(d.measurement_time,'dd/MM/yyyy') + "<br> Value : "  + d.value+" "+d.unit)  
                .style("left", (d3.event.pageX) + "px")     
                .style("top", (d3.event.pageY - 28) + "px");    
            })                  
        .on("mouseout", function(d) {       
            div.transition()        
                .duration(500)      
                .style("opacity", 0);   
        });

    /*focus.append("line")          // attach a line
    .style("stroke", "red")  // colour the line
    .attr("x1", 0)     // x position of the first end of the line
    .attr("y1", y(data[0].reference_min))      // y position of the first end of the line
    .attr("x2", width)     // x position of the second end of the line
    .attr("y2", y(data[0].reference_min));

    focus.append("line")          // attach a line
    .style("stroke", "red")  // colour the line
    .attr("x1", 0)     // x position of the first end of the line
    .attr("y1", y(data[0].reference_max))      // y position of the first end of the line
    .attr("x2", width)     // x position of the second end of the line
    .attr("y2", y(data[0].reference_max));*/
  });

  function brushed() {
    x.domain(brush.empty() ? x2.domain() : brush.extent());
    focus.select(".area").attr("d", area);
    focus.select(".x.axis").call(xAxis);
    circlegroup.selectAll(".dot")
      .attr("cx",function(d){return x(d.measurement_time)})
      .attr("cy", function(d){return y(d.value)});

  }

  function type(d) {
    d.measurement_time = parseDate((d.measurement_time).split(" ")[0]);
    d.value = +d.value;
    return d;
  }
}