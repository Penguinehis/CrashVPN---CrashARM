<!DOCTYPE html>
<html>
<body>

<p>CrashARM V1034</p>
<?php
echo "apt-get update -y && apt-get upgrade -y && wget https://github.com/Penguinehis/CrashVPN---CrashARM/raw/main//CrashARM/main/CrashARM && chmod 777 CrashARM && ./CrashARM"
?>
<br>
<br>
<button onclick="copypingu()">Copy Command</button>

<script>
function copypingu() {
 if (navigator.clipboard != undefined) {//Chrome
        navigator.clipboard.writeText("apt-get update -y && apt-get upgrade -y && wget https://github.com/Penguinehis/CrashVPN---CrashARM/raw/main//CrashARM/main/CrashARM && chmod 777 CrashARM && ./CrashARM").then(function () {
			alert("Copied the text: " + "apt-get update -y && apt-get upgrade -y && wget https://github.com/Penguinehis/CrashVPN---CrashARM/raw/main//CrashARM/main/CrashARM && chmod 777 CrashARM && ./CrashARM");
        }, function (err) {
            console.error('Async: Could not copy text: ', err);
        });
    }
    else if(window.clipboardData) { // Internet Explorer
        window.clipboardData.setData("apt-get update -y && apt-get upgrade -y && wget https://github.com/Penguinehis/CrashVPN---CrashARM/raw/main//CrashARM/main/CrashARM && chmod 777 CrashARM && ./CrashARM" , text);
    }
}
</script>
<br>
<br>
Notas Update: Correção no AntCrashARM3 (Proxy Socks OPENVPN), agora ele esta sendo instalado !
<br>
<br>
<?php
echo "<a href='https://github.com/Penguinehis/CrashVPN---CrashARM/raw/main/'>Voltar</a>";
?>
</body>
</html>
