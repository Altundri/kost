// JavaScript Document
    var ajaxku;
    function getgambar(kab){
            ajaxku = createajax();
            var url="getgambar.php";
            url=url+"?kab="+kab;
            url=url+"&sid="+Math.random();
            ajaxku.onreadystatechange=kecamatanChanged;
            ajaxku.open("GET",url,true);
            ajaxku.send(null);
        }
    function kecamatanChanged(){
            var data;
            document.getElementById("dvkecamatan").innerHTML= "Looading.......";
            if (ajaxku.readyState==4)
                {
                    data=ajaxku.responseText;
                    if(data.length>0)
                        {
                            document.getElementById("dvkecamatan").innerHTML = data
                        }
                    else
                        {
                            document.getElementById("dvkecamatan").innerHTML= "";
                        }
                }
            else
                {
                    document.getElementById("dvkecamatan").innerHTML= "Looding";
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