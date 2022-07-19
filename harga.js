// JavaScript Document
var ajaxku;
function get_harga(tar){
        ajaxku = createajax();
        var url="get_harga.php";
        url=url+"?tar="+tar;
        url=url+"&sid="+Math.random();
        ajaxku.onreadystatechange=hargaChanged;
        ajaxku.open("GET",url,true);
        ajaxku.send(null);
    }
function hargaChanged(){
        var data;
        document.getElementById("dvharga").innerHTML= "Looading.......";
        if (ajaxku.readyState==4)
            {
                data=ajaxku.responseText;
                if(data.length>0)
                    {
                        document.getElementById("dvharga").innerHTML = data
                    }
                else
                    {
                        document.getElementById("dvharga").innerHTML= "";
                    }
            }
        else
            {
                document.getElementById("dvharga").innerHTML= "Looding";
            }           
        }                                           
  
function createajax(){
        if (window.XMLHttpRequest){
                return new XMLHttpRequest();
            }
        if (window.ActiveXObject){
            return new ActiveXObject("Microsoft.XMLHTTP");
            }
        return null;
    }