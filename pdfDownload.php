<?php

header("Content-Disposition: attachment; filename=Rudolph_Oosthuizen_CV.pdf");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-type: application/pdf;");

readfile("cvPDF/Rudolph_Oosthuizen_CV.pdf");