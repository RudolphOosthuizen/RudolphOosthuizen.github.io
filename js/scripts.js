console.log('JS working');

function downloadPDF(){
    console.log('Redirecting..');
    window.open("pdfDownload.php");
}

function scrollToId(id){
    console.log('Scroll working');
    let scrollTarget = document.getElementById(id);
    scrollTarget.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
}