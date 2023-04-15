
document.addEventListener('DOMContentLoaded', function() {

    var azioni = document.getElementById('FormTable');
    // console.log(azioni);
    // azioni.addEventListener('dblclick', function(dc) {
    //     // console.log(dc.target);
    //     if (dc.target.parentNode.childNodes[0].innerHTML!=='ID') { //se non si è sulla riga delle intestazioni della tabella
    //
    //     var idDet = dc.target.parentNode.childNodes[1].innerText;
    //     if (isNaN(idDet)) idDet = dc.target.parentNode.parentNode.childNodes[1].innerText;
    //     if (idDet==='') idDet = dc.target.parentNode.parentNode.parentNode.parentNode.childNodes[1].innerText;
    //     window.location.href=location.pathname+"/"+idDet+'/edit'
    // }
    // });
    //catturo l'evento 'onclick' col costrutto addEventListener
    azioni.addEventListener('click', function(ev) {
        // ev.preventDefault();
        var whereclick = ev.target.parentNode.type;
        if (whereclick == undefined){
            // console.log('OK, contains path or line');
            var a = ev.target.parentNode.parentNode;
        }else{
            // console.log('NOT contains path or line but svg');
            var a = ev.target.parentNode;
        }
        // console.log(a);

        if (a.attributes.hasOwnProperty('title')) {
            // ev.preventDefault();
            var actTo2 = a.attributes.title.value;
            // console.log(a.attributes.title.value);
            // var tr = a.parentNode.parentNode;
            var idElemento = a.attributes.id.value;
            // console.log(idElemento);
            var pathArray = location.pathname.split('/');
            // var urlHash=pathArray[1]+'/'+pathArray[2];
            var urlAction = location.origin+"/"+pathArray[1]+'/'+pathArray[2]+'/'+idElemento+"/"+actTo2;
        // console.log(urlAction);

        if (actTo2 === 'deletevoice') {
            // ev.preventDefault();
            // console.log(urlMethod);
            let JSalert = new Promise(function (resolve, reject) {
                swal({
                        title: "CANCELLAZIONE!",
                        text: "Intendi eseguire la cancellazione della voce "+idElemento+" e delle eventuali sottovoci?",
                        type: "warning",
                        showCancelButton: true,
                        //confirmButtonColor: "#DD6B55",
                        confirmButtonColor: "purple",
                        confirmButtonText: "SI, rimuovi voce ed eventuali sottovoci!",
                        cancelButtonText: "NO, non sono sicuro!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Fatto!", "Voce rimossa definitivamente!", "success");
                            eseguiCancellazione()
                        } else {
                            swal("No action!", "La voce non è stata rimossa!", "error");
                            return false;
                        }
                    });
            });

            // let exec = function(){
            //     JSalert().then(function(){
            //         alert(result)
            //     });
            // }
        }
    }
        function eseguiCancellazione (){
            var tokn = document.getElementsByTagName('meta').namedItem('csrf-token').content;
            // console.log(tokn);
            var ajaxCall = new XMLHttpRequest();
            var metodo = 'DELETE';

            ajaxCall.open(metodo, urlAction);
            ajaxCall.setRequestHeader("x-csrf-token", tokn);
            ajaxCall.send();
            ajaxCall.onreadystatechange = function () {
                if (ajaxCall.readyState === 4 && ajaxCall.status === 200) {
                    // console.log('INIZIO CHIAMATA AJAX');
                    var resp = ajaxCall.responseText;
                    // console.log(resp);
                    if(resp == 1){
                        // tr.parentNode.removeChild(tr); //rimuove il nodo TR contenente il pulsante Cancella pigiato dall'utente
                        location.reload()
                    } else {
                        alert('Problem contacting server');
                    }
                }
            }
        }
});


})



