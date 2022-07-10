
function booking() {
    var name = document.getElementById("name").value;
    // var surname = document.getElementById("surname").value;
    // var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var date = document.getElementById("date").value;
    var tour = document.getElementById("package").value;

    var my_text = `Yangi buyurtmachi:%0A - Ism: ${name} %0A - Telefon: ${phone} %0A - Sayohat sanasi: ${date} %0A - Tur paket: ${tour}`

    var token =  "5484838071:AAH9w9bmQFcH5Xt-0f0nOryEXhOrHK3vRCQ";
    var chat_id = -778989962;
    var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${my_text}`

    let api = new XMLHttpRequest();
    api.open("GET", url, true);
    api.send();

   alert("Tabriklaymiz! Buyurtmangiz muvaffaqqiyatli qabul qilindi! Tez orada siz bilan bog'lanamiz.");
}