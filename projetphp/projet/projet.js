/*$(function() {
    $('header div span:first-child').click(function() {
        $('.bloc').css('font-size', '1.5rem')
    });
});
$(function() {
    $('header div span:nth-child(2)').click(function() {
        $('.bloc').css('font-size', '0.8rem')
    });
});
$(function() {
    $('header div span:nth-child(3)').click(function() {
        $('p').css('color', 'black')
    });
});
$(function() {
    $('header div span:nth-child(4)').click(function() {
        $('p').css('color', 'green')
    });
});*/
function grand() {

    document.querySelectorAll('.bloc')[0].style.fontSize = '1.5rem';
}

function petit() {
    document.querySelectorAll('.bloc')[0].style.fontSize = '0.8rem';
}

function noir() {
    var p = document.querySelectorAll('main p');
    for (let index = 0; index < p.length; index++) {
        p[index].style.color = 'black';

    }
}

function vert() {
    var p = document.querySelectorAll('main p');
    for (let index = 0; index < p.length; index++) {
        p[index].style.color = 'green';

    }
}

/*$(function() {
  $('header div span:first-child').click(function() {
    $('main').css('font-size', '1.5rem');
  });
  $('header div span:nth-child(2)').click(function() {
    $('main').css('font-size', '1rem');
  });
  $('header div span:nth-child(3)').click(function() {
    $('main article p').css('color', 'black');
  });
  $('header div span:nth-child(4)').click(function() {
    $('main article p').css('color', 'green');
  });
});  */


function valider(ev) {
    var exp = new RegExp(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/);
    var ok = true;
    var nom = f.nom.value;
    var mail = f.mail.value;
    var tex = f.ta.value;
    if (nom == '') {
        document.getElementById('span1').innerHTML = 'Veuillez compléter ce champ';
        ok = false;
    } else {
        document.getElementById('span1').innerHTML = '';
    }
    if (mail == '') {
        document.getElementById('span2').innerHTML = 'Veuillez compléter ce champ';
        ok = false;
    } else {
        document.getElementById('span2').innerHTML = '';
        if (exp.test(mail) == false) {
            ok = false;
            document.getElementById('span2').innerHTML = 'L\'adresse mail est mal formée';
        } else {
            document.getElementById('span2').innerHTML = '';
        }
    }
    if (tex == '') {
        document.getElementById('span3').innerHTML = 'Veuillez compléter ce champ';
        ok = false;
    } else {
        document.getElementById('span3').innerHTML = '';
    }
    if (ok == true) {
        alert('Les données ont été envoyées');
        document.getElementById('span4').innerHTML = '';
    } else {
        document.getElementById('span4').innerHTML = 'Attention : le formulaire n\'a pas été envoyé';
    }
    ev.preventDefault();
}
/*function valider(ev) {
    var ok = true;
    var nom = f.nom.value;
    var test = new RegExp(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/);
    var tex = f.tex.value;
    if (nom == '') {
        document.getElementById('span1').innerHTML = 'Veuillez compléter ce champ';
        ok = false;
    } else {
        document.getElementById('span1').innerHTML = '';

    }
    if (test == false) {
        document.getElementById('span2').innerHTML = 'Veuillez compléter ce champ';
        ok = false;
    } else {
        document.getElementById('span2').innerHTML = '';

    }
    if (tex == '') {
        document.getElementById('span3').innerHTML = 'Veuillez compléter ce champ';
        console.log(document.getElementById('span3'));
        ok = false;
    } else {
        document.getElementById('span3').innerHTML = '';

    }
    if (ok == true) {
        alert('Votre formulaire est bien envoyé');
        document.getElementById('span4').innerHTML = '';

    } else {
        document.getElementById('span4').innerHTML = "Attention le formulaire n'est pas envoyé";
    }
    ev.preventDefault();

}*/

/*function verifier() {
    if (nom == true && mail == true && tex == true) {
        alert("Votre formulaire est envoyé");
    } else {
        document.getElementById('span4').innerHTML = 'Veuillez compléte le champ vide';
    }
};*/


/*function verifier(nom) {
    if (nom == "") {
        alert("Un champ n'est pas remplie");

        return false;
    }
    return true;
};*/