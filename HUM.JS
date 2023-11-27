//START NAVIGATION
function openNav()
{
    document.getElementById("myNav").style.width = "100%";
}
function closeNav()
{
    document.getElementById("myNav").style.width = "0%";
}
// END NAVIGATION
//ANIMATE
function minimizecard(argfromuser)
{
    document.getElementById(argfromuser).style.display = "none"
}
function expandcard(argfromuser)
{
   document.getElementById(argfromuser).style.display = "block"
    // alert(typeof(argfromuser))
}
//END  ANIMATE