<!DOCTYPE html>
<html>
<body>

<p>CRASHVPN V1034</p>
<?php
echo "apt-get update -y && apt-get upgrade -y && wget https://worldofdragon.us.eu.org/CrashVPN/main/crashvpn && chmod 777 crashvpn && ./crashvpn"
?>
<br>
<br>
<button onclick="copypingu()">Copy Command</button>

<script>
function copypingu() {
 if (navigator.clipboard != undefined) {//Chrome
        navigator.clipboard.writeText("apt-get update -y && apt-get upgrade -y && wget https://worldofdragon.us.eu.org/CrashVPN/main/crashvpn && chmod 777 crashvpn && ./crashvpn").then(function () {
			alert("Copied the text: " + "apt-get update -y && apt-get upgrade -y && wget https://worldofdragon.us.eu.org/CrashVPN/main/crashvpn && chmod 777 crashvpn && ./crashvpn");
        }, function (err) {
            console.error('Async: Could not copy text: ', err);
        });
    }
    else if(window.clipboardData) { // Internet Explorer
        window.clipboardData.setData("apt-get update -y && apt-get upgrade -y && wget https://worldofdragon.us.eu.org/CrashVPN/main/crashvpn && chmod 777 crashvpn && ./crashvpn" , text);
    }
}
</script>
<br>
<br>
Notas Update: Correção no AntcrashVPN3 (Proxy Socks OPENVPN), agora ele esta sendo instalado !
<br>
<br>
<?php
echo "<a href='https://worldofdragon.us.eu.org'>Voltar</a>";
?>
</body>
</html>
