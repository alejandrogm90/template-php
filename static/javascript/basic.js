//console.log('hello');

function clean () {
    var elem = document.getElementById('box1');
    if (elem.childElementCount >2){ elem.removeChild(elem.childNodes[elem.childElementCount - 1]) }
    else { 
        var nodo = document.createElement("p");
        nodo.appendChild(document.createTextNode("This is a paragraph."));
        elem.appendChild(nodo);
    }
}