console.log('JS working');
$('.alert').alert("close");;

function downloadPDF(){
    console.log('Redirecting..');
    window.open("pdfDownload.php");
}

function scrollToId(id){
    console.log('Scroll working');
    let scrollTarget = document.getElementById(id);
    scrollTarget.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
}

function showAlert(){
    $('.alert').alert();;
}