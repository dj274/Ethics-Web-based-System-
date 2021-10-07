function manageTextArea(yesorno, answerID)
{

  if (yesorno)
  {
        document.getElementById(answerID).style.display = "block";
  }
  else {
      document.getElementById(answerID).style.display = "none";
  }
}

function clearInputs()
{
  var inputs = document.getElementsByTagName('input');

  for(var i = 0; i < inputs.length; i++) {
    inputs[i].value = "";

    if(inputs[i].type.toLowerCase() == 'checkbox') {
      if (inputs[i].id != "agreeterms:")
      {
        inputs[i].checked = false;
        inputs[i].setAttribute("required", true)
      }
    }
  }
}



window.onload = function () {
    var url = document.location.href;

    if (url.split('?')[1] != undefined)
    {
      var params = url.split('?')[1].split('&');
      var data = {};
      var tmp;

      for (var i = 0; i < params.length; i++) {
          if (params[i] != undefined)
          {
            tmp = params[i].split('=');
            data[tmp[0]] = tmp[1];
          }
      }
    }
}

function currCheck(name)
{
  currentBox = document.getElementById(name.target.id);

  var inputs = document.getElementsByTagName('input');

    for(var i = 0; i < inputs.length; i++) {
        if(inputs[i].type.toLowerCase() == 'checkbox') {
          if (inputs[i].id == currentBox.id)
          {
            if (inputs[i].value != name.target.value)
            {
              inputs[i].removeAttribute("required")
              inputs[i].checked = false;
            }
            else {
              inputs[i].setAttribute("required", true)
            }
          }
        }
    }
}

function toggleTextArea() {

	var textbox = document.getElementById('commentbox');

	var displaySetting = textbox.style.display;


	if(displaySetting =='none'){
	    
 		textbox.style.display='block';
		commentButton.innerHTML = 'hide';
	}else{
	   
		textbox.style.display='none';
		commentButton.innerHTML = 'Add Comment';
	}
}