
function vidPlayer(a,b,c)	//(pointer to element, file name, messages)
{
//alert('link ='+b);

	var top = document.getElementsByTagName('div')[0];	//create a pointer to top of dom tree
	
	addPlayer(top,b,c);	//This calles the function to add the player to the page.
	
	fileType(b);
}

function addPlayer(top, link, desc)
{
	//alert('link ='+link);
	var  x=top.parentNode;//get body tag(top of DOM tree
	
	//Create the objects
	
	//Create divisions <div>
	var a = document.createElement('div');	//create backdrop
	var b = document.createElement('div');	//create player_box
	var c = document.createElement('div');	//create content_box
	var d = document.createElement('div');	//create vid_holder
	var e = document.createElement('div');	//create controls
	
	//Create paragraphs <p>
	var f = document.createElement('p');	//create vid_wrapper
	var g = document.createElement('p');	//create vid_description
	var h = document.createElement('p');	//create close_btn
	var i = document.createElement('p');	//create cap
	
	//Create images <img>
	var j = document.createElement('img');	//image for close buttion
	var k = document.createElement('img');	//image for next buttion
	var l = document.createElement('img');	//image for previous buttion
	
	//Create text nodes
	var txt1 = document.createTextNode('hello');
	var txt2 = document.createTextNode('testing');
	
	//Creat object tag <object>
	var m = document.createElement('object');
	
	//Create embed tag
	var n = document.createElement('embed');
	
	// Name elements
	a.id = 'player_back';		//name player_back - This is the back drop that blacks out everything behind vidPlayer.
	b.id = 'player_box';		//name player_box - 
	c.id = 'content_box';		//name content_box - This is the white box that holds the content.
	d.id = 'vid_holder';			//name vid_holder - This is the 
	e.id = 'controls';				//name controls - holds the close button and description of video
	f.id = 'vid_wrapper';		//name vid_wrapper - contains the object and embed tags that play the video
	g.id = 'vid_description';	//name vid_description - holds descriptions for videos
	h.id = 'close_btn';			//name close_btn - holds the image for the close button and closes vidPlayer
	i.id = 'cap';					//name cap
	
	
	// Set attributes
	i.className = 'cap';					//sets the class of this <p> to 'cap'
	j.src = 'images/closelabel.gif';
	j.alt = 'close video';
	m.setAttribute('width', '480');//480,853
	m.setAttribute('height', '377');//377,496
	m.setAttribute('classid', 'clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B');
	m.setAttribute('codebase', 'http://www.apple.com/qtactivex/qtplugin.cab');
	m.setAttribute('src', link);
	m.setAttribute('autoplay', 'false');
	m.setAttribute('controller', 'true');/*scale="aspect"*/ 
	//m.setAttribute('scale', 'aspect');
	n.setAttribute('src', link);
	n.setAttribute('width', '480');
	n.setAttribute('height', '377');
	n.setAttribute('autoplay', 'false');
	n.setAttribute('controller', 'true');
	n.setAttribute('pluginspage', 'http://www.apple.com/quicktime/download/');
	//n.setAttribute('scale', 'aspect');
	
	//set up DOM
	h.appendChild(j);		//add the image to the close button("close_btn")
	g.appendChild(txt1);	//add the decription of the video to "vid_description"
	m.appendChild(n);		//add embed tag to object tag
	f.appendChild(m);		//add object tag to "vid_wrapper"
	d.appendChild(f);		//add "vid_wrapper" to "vid_holder"
	e.appendChild(g);		//add "vid_description" to "controls"
	e.appendChild(h);		//add "close_btn" to "controls"
	e.appendChild(i);		//add "cap" to "controls"/**/
	
	
	//Place divisions on the page
	backDrop = x.insertBefore(a,top);										//add the back drop(player_back) to the page
	playerBox = x.insertBefore(b,top);										//add "player_box" to the page and create reference to it
	contBox = playerBox.insertBefore(c,playerBox.firstChild);		//add "content_box" to the page
	controls = contBox.insertBefore(e,contBox.firstChild);
	vidHolder = contBox.insertBefore(d,contBox.firstChild);
	
	closeBtn = document.getElementById('close_btn');
	
	addClick(closeBtn,backDrop,playerBox);//add event handelers
	document.getElementById('content_box').focus();
	
	buildDisplay(link);
}

function addClick(x,y,z)
{
	//add event handelers
	x.onclick = removePlayer;
	y.onclick = removePlayer;
}
function removePlayer()
{
	//alert('removePlayer');
	var a = document.getElementById('player_box');
	
	var b = document.getElementById('player_back');
	
	b.parentNode.removeChild(b);
	a.parentNode.removeChild(a);
	
}

function fileType(fName)
{
	dot = fName.lastIndexOf(".");		//find the start of the file suffix
	fType = fName.substr(dot);		//get file suffix
	//alert(fType);
	
	return fType;
}

function buildDisplay(fName, fAdd) 	//This creates the element displaying the file(file name, address of file).
{
	target = fileType(fName);
	
	switch(target)
	{
		case '.mov':
			alert('case .mov');
			break;
			
		case '.img':
			alert('case .img');
			break;
			
		default:
		  alert('case default');
	}
}


