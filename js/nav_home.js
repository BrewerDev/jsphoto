//alert('hi 1');
var Aid = new Object();

//alert('check');
Aid.init=function()
{
	//alert('check 1');
	var target2 = document.getElementById('lnk_gal');
	var target3 = document.getElementById('lnk_vid');
	
	Core.addEventListener(target2,'click',Aid.setArrow);
	Core.addEventListener(target3,'click',Aid.setArrow);
}

Aid.setArrow = function()
{	
	//alert('check 2');
	
	var x = this;
	var y = String(Core.getComputedStyle(x,"backgroundImage"));
	
	//alert(y);
	
	var closed = 'url("http://jsmithphoto.biz/images/arrow_5.gif")';
	var open = 'url("http://jsmithphoto.biz/images/arrow_6.gif")';
	//alert('check 4');
	
	//x.style.backgroundImage=open;
	//alert('check 5');
	//
	//alert('1 src='+x.src);
	if( y == closed)//this needs attention
	{
		//alert('check 6');
		
		x.style.backgroundImage=open;	
		Aid.openBox(this);
	}
	else if(y == open)//this needs attention
	{
		//alert('check 7');
		x.style.backgroundImage=closed
		
		Aid.closeBox(this);
		
	}
	else
	{
		//alert('y = '+y+' open = '+open+' closed = '+closed);
		//alert(open);
		//alert(closed);
		alert('there is a problem');
		//x.src = 'images/arrow_4.gif';
	}/**/
	
}

Aid.openBox=function(y)
{
	var x = y.nextElementSibling;
	var z = x.parentNode;
	//alert(x.id);
	
	if (Core.hasClass(x,"closed"))
	{
		Core.removeClass(x,"closed");
		//alert(z.id);
		
		var a = parseInt(Core.getComputedStyle(z,"paddingLeft"));
		
		//alert(a);
		
		var b =  parseInt(Core.getComputedStyle(x,"width"));
		
		//alert(b);
		//alert(x.id);
		
		var c = String(a-140);
		var d = c+"px";
		
		//var c = '100px';
		//alert ('d='+d);
		//alert( parseInt(Core.getComputedStyle(z,"paddingLeft")));
		
		z.style.paddingLeft=d;
		Core.addClass(x,"open");
	}
	else
	{	alert (x.id);
		alert('oops!');
	}
}

Aid.closeBox=function(y)
{
	var x = y.nextElementSibling;
	var z = x.parentNode;
	
	if (Core.hasClass(x,"open"))
	{
		Core.removeClass(x,"open");
		Core.addClass(x,"closed");
		
		var a = parseInt(Core.getComputedStyle(z,"paddingLeft"));
		//var b =  parseInt(Core.getComputedStyle(x,"width")); 
		
		var c = String(a+140);
		//alert(c);
		var d = c+"px";
		
		z.style.paddingLeft=d;
	}
	else
	{
		alert('oops!');
	}
}

//alert('hi 8');
Core.start(Aid);// important, Aid must be object
//alert('hi 9');