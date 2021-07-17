
function showUserMenu() {
    document.getElementById("usermenu").style.display = "flex";
    document.getElementById("usermenu").style.flexDirection = "column"; 
}

function hideUserMenu() {
    var disp = document.getElementById("usermenu");
    disp.style.display = "none";
    
}

function userMenu() {
    
    if(document.getElementById("usermenu").style.display == "none") {
        showUserMenu();
    }
    else {
        hideUserMenu();
    }
}

function showDetails(elid) {
    var fd = "fd" + elid.toString(); 
    document.getElementById(fd).style.display = "flex";
    document.getElementById(fd).style.display.flexDirection = "row";
    for (i = 0; i < 10; i++ ) {
        document.getElementById("b" + i.toString()).style.display = "none";
    }
    
}

function hideDetails(elid) {
    var fd = "fd" + elid.toString();
    document.getElementById(fd).style.display = "none";
    
    for (i = 0; i < 10; i++ ) {
        document.getElementById("b" + i.toString()).style.display = "flex";
    }
}

function showDetails1(elid) {
    var fd = "foo" + elid.toString(); 
    document.getElementById(fd).style.display = "flex";
    document.getElementById(fd).style.display.flexDirection = "row";
    for (i = 0; i < 10; i++ ) {
        document.getElementById("boo" + i.toString()).style.display = "none";
    }
    
}

function hideDetails1(elid) {
    var fd = "foo" + elid.toString();
    document.getElementById(fd).style.display = "none";
    
    for (i = 0; i < 10; i++ ) {
        document.getElementById("boo" + i.toString()).style.display = "flex";
    }
}