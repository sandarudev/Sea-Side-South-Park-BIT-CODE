function checkform() {
    var desti = Document.form1.desti.value;
    var checkin = Document.form1.checkin.value;
    var checkout = Document.form1.checkout.value;
    var adults1 = Document.form1.adults1.value;
    var Children1 = Document.form1.Children1.value;

if(desti=="")
{
    alert("destination is empty");
    return false;
}
if (checkin=="date"){
    alert("check-in is empty");
    return false;
}
if(checkout=="date"){
    alert("check-out is empty");
    return false;
}
 if(adults1==""){
     alert("adults1 is empty");
     return false;
 }

 if(Children1=="")
 {alert("Children1 is empty");
 return false;
}
}