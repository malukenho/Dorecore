function kakunin(btnNo){
  if (btnNo == 1){
    link = "Yahoo!Japan";
    href = "http://www.yahoo.co.jp/";
	clubs = none;
  }else{
    link = "Google";
    href = "http://www.google.co.jp/";
  }

  //ret = confirm(link + "Ç÷îÚÇ—Ç‹Ç∑ÅBãXÇµÇ¢Ç≈Ç∑Ç©ÅH");
  //if (ret == true){
    location.href = href;
  //}
}

function hyoji1(num)
{
  if (num == 0)
  {
    document.getElementById("disp").style.display="block";
  }
  else
  {
    document.getElementById("disp").style.display="none";
  }
}

function hyoji2(num)
{
  if (num == 0)
  {
    document.getElementById("visi").style.visibility="visible";
  }
  else
  {
    document.getElementById("clubs").style.visibility="hidden";
  }
}