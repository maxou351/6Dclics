    // function text(value) {
    //     console.log("Toto");
    //     switch(value) {
    //         case 'accompagnement': return 'Demande d\'accompagnement';
    //         case 'creation': return 'Demande de création de site';
    //         case 'renseignement': return 'Demande de renseignement';
    //         case 'autre': return 'Autre';
    //         default: return '-- Choisir une option --';
    //     }
    // }

    const params = new URLSearchParams(window.location.search);
    const from = params.get('from');

    if (from) {
    console.log("L'utilisateur vient de :", from);
    // Exemple : document.querySelector('#form-reason').value = from;
    }   