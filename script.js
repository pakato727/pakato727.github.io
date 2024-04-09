/*Sezione download del mio curriculum vitae tramite il click di un pulsante*/ 
const cvBtnContainer = document.getElementById("cvBtnContainer");
const downloadFile = () => {
    // URL del file da scaricare
    var percorsoFile= "files/CurriculumVitae-PiccirilloPasquale.pdf";
    
    // Nome con cui verrà salvato il file
    var nomeFile = "CurriculumVitae-PiccirilloPasquale.pdf";

    // Creazione di un elemento "ancora" (link)
    var link = document.createElement("a");
    link.href = percorsoFile;
    link.download = nomeFile;

    // Aggiunta dell'ancora al documento HTML
    cvBtnContainer.appendChild(link);

    // Simula il click sull'ancora per avviare il download
    link.click();

    // Rimuovi l'ancora dopo il download
    setTimeout(() => {
        cvBtnContainer.removeChild(link);
    }, 100);

}

const menuBtn = document.querySelector("#menuBtn");
menuBtn.addEventListener("click", function () {
    document.querySelector(".navbar").classList.toggle("active");
  });