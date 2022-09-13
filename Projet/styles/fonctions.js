
function confirmation() {
    var answer = confirm('Êtes vous sur de vouloir supprimer ?');
    if (answer === true) {
        return true;
    } else {
        return false;
    }
}

