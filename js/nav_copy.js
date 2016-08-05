
alert('hi 1');
var Aid = new Object();

alert('check');
Aid.init=function()
{
	alert('check 1');
	var target1 = document.getElementById('evnt_arrow');
	var target2 = document.getElementById('gal_arrow');
	var target3 = document.getElementById('vid_arrow');
	
	Core.addEventListener(target1,'click',Aid.setArrow);
	Core.addEventListener(target2,'click',Aid.setArrow);
	Core.addEventListener(target3,'click',Aid.setArrow);
}

Aid.setArrow = function()
{
	var x = this.firstChild;
	var closed = 'images/arrow_3.gif';
	var open = 'images/arrow_4.gif';
	alert('hi 7');
	alert('1 src='+x.src);
	if( x.src == 'http://www.dragonpjb.com/josh_web/images/arrow_3.gif')//this needs attention
	{
		x.src = 'images/arrow_4.gif';
		
		Aid.openBox(this);
	}
	else if(x.src == 'http://www.dragonpjb.com/josh_web/images/arrow_4.gif')//this needs attention
	{
		x.src = 'images/arrow_3.gif';
		
		Aid.closeBox(this);
		
	}
	else
	{
		alert('4 src='+x.src);
		alert(open);
		alert(closed);
		alert('there is a problem');
		x.src = 'images/arrow_4.gif';
	}
	
}

Aid.openBox=function(y)
{
	var x = y.parentNode.nextElementSibling;
	
	alert(x.id);
	
	if (Core.hasClass(x,"closed"))
	{
		Core.removeClass(x,"closed");
		Core.addClass(x,"open");
	}
	else
	{
		alert('oops!');
	}
}

Aid.closeBox=function(y)
{
	var x = y.parentNode.nextElementSibling;
	
	if (Core.hasClass(x,"open"))
	{
		Core.removeClass(x,"open");
		Core.addClass(x,"closed");
	}
	else
	{
		alert('oops!');
	}
}
/*
Aid.mary=function()
{
	if(!Core.hasClass(this,"highlight"))
	{
		Core.addClass(this,"highlight");
	}
	else
	{
		Core.removeClass(this,"highlight");
	}
}*/
//alert('hi 8');
Core.start(Aid);// important, Aid must be object
//alert('hi 9');