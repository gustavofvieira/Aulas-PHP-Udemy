<?php
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
echo strftime("%a %b");
echo "<br>";
echo strftime("%A %B");
echo "<br>";
echo ucwords(strftime("%A %B"));