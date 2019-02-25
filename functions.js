console.log("I'm heeeeee  111");


// document.getElementById("changeLanguage").onclick = function() {
//     document.getElementById("contacts").href="Контакты"; 
//     return false;
//   };

// console.log(document.getElementById("changeLanguage").innerHTML)

// if (document.getElementById("changeLanguage").innerHTML === "EN") {
// 	console.log("EN")
// 	document.getElementById("contacts").innerHTML = "Contacts";
// } else {
// 	console.log("RU")
// 	document.getElementById("changeLanguage").innerHTML = "РУ";
// 	document.getElementById("contacts").innerHTML = "Контакты";

// }

function f1() {
	console.log("-----DDDDDDDDDDDD-");
	document.getElementById("contacts").innerHTML = "Контакты"
   	console.log(document.getElementById("contacts").innerHTML);
   	
}


function setCookie(name, value, options) {
  options = options || {};

  var expires = options.expires;

  if (typeof expires == "number" && expires) {
    var d = new Date();
    d.setTime(d.getTime() + expires * 1000);
    expires = options.expires = d;
  }
  if (expires && expires.toUTCString) {
    options.expires = expires.toUTCString();
  }

  value = encodeURIComponent(value);

  var updatedCookie = name + "=" + value;

  for (var propName in options) {
    updatedCookie += "; " + propName;
    var propValue = options[propName];
    if (propValue !== true) {
      updatedCookie += "=" + propValue;
    }
  }

  document.cookie = updatedCookie;
}