var p = false;
var T = document.getElementById('visForm').style;
T.display = 'none';
function visAddForm()
	{
		p = !p;
		if (p == false){
			T.display = 'none';
		}
		else{
			T.display = 'block';
		}
	}