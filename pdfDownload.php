<?php

// opens and closes new tab fast to download CV.pdf from repo
header("Content-Disposition: attachment; filename=Rudolph_Oosthuizen_CV.pdf");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-type: application/pdf;");

//clear output buffer or smth
ob_clean();
flush();
readfile("cvPDF/Rudolph_Oosthuizen_CV.pdf");