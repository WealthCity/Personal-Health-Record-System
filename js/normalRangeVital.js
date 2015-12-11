
var normalRangeVital =[
   {
      "vitalSign":"Oral Temperature",
      "min":96,
      "max":99
   },
   {
      "vitalSign":"Systolic Blood Pressure",
      "min":90,
      "max":120
   },
   {
      "vitalSign":"Peripheral Pulse Rate",
      "min":60,
      "max":100
   },
   {
      "vitalSign":"Diastolic Blood Pressure",
      "min":60,
      "max":80
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

function findJSON(selectedMetric)
{
  for(index in normalRangeVital)
  {
    if(normalRangeVital[index]["vitalSign"] == selectedMetric)
      return normalRangeVital[index];
  }
}


