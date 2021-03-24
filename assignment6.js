//assignment 6 script
count = 0;
function addField()
{
  count ++;
  var myText = document.createElement("input");
  var myBreak = document.createElement("br");
  myText.setAttribute("type", "text field: " + count);
  document.getElementById('myForm').appendChild(myText);
  document.getElementById('myForm').appendChild(myBreak);
  //finish it
}
function addRadio()
{
  let count1 ++;
  var myText = document.createElement("input");
  var myBreak = document.createElement("br");
  var radioLabel = document.createElement("label");
  myText.setAttribute("type", "radio");
  myText.setAttribute("name", "testRadio");
  mytext.setAttribute("value", "txt" + count1);
  radioLabel.setAttribute("for", "txt" + count1);
  myText.setAttribute("id", "radio" + count1);
  document.getElementById('myForm').appendChild(myText);
  document.getElementById('myForm').appendChild(myBreak);
}
