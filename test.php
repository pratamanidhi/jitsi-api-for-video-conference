<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script src="https://cakra2.primastream.com/prima_api.js"></script>
	<script>
                var domain = "meet.jit.si";
                var options = {
                    roomName: "none",
                    width: 1000,
                    height: 700,
                    parent: undefined,
                    configOverwrite: {},
                    interfaceConfigOverwrite: {
                        filmStripOnly: true
                    }
                }
                var api = new JitsiMeetExternalAPI(domain, options);
            </script>

</body>
</html>