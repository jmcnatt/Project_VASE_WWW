function OpenWindow(p_Where, p_Width, p_Height, p_Name) 
{
	if (p_Width == "") {
		p_Width = 605;
	}
	
	if (p_Height == "") {
		p_Height = 530;
	}
	
	if (p_Name == "") {
		p_Name = "screenshot";
	}
	
	var pane=open(p_Where, p_Name, "menubar=no,toolbar=no,width=" + p_Width + ",height=" + p_Height + ",resizable=1,scrollbars=0");
	pane.focus();
}