function imprimer(e)
{
    const contenu = document.querySelector('.print').innerHTML
    const contenuOriginal = document.body.innerHTML
    document.body.innerHTML =contenu
    // setTimeout(() => {window.print()}, 500);
    window.print()
    document.body.innerHTML=contenuOriginal
}